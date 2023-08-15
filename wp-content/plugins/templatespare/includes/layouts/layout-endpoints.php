<?php

if(!class_exists('AFTMLS_RestApi_Request')){

    class AFTMLS_RestApi_Reques_Controller{

        public function __construct() {
            $this->namespace = 'templatespare/v1';
            $this->query_base = 'demo-lists';
        }

        public function templatespare_register_routes() {
            

            register_rest_route(
                'templatespare/v1','single-demo-content',
                array(
                    array(
                        'methods' => \WP_REST_Server::READABLE,
                        'callback'            => array( $this, 'templatespare_get_single_demo_list_items' ),
                        'permission_callback' => function () {
                        return true;
                    },
                    ),
                )
            );
            
        }

       
        public function templatespare_get_single_demo_list_items(\WP_REST_Request $request){
            $params = $request->get_params();
            $data['singleDemo']=$this->templatespare_ajax_render_demo_lists($params['slug'],$params['s'],$params['dropdown'],$params['cat'],$params['selectedtheme']);
            
            return  $data;

        }

        function templatespare_ajax_render_demo_lists($slug,$s,$d,$cat,$theme){
            
           
            $all_demos = templatespare_templates_demo_list();
            
            $themecheck = explode('-',$theme);
            $parentNode =  array();
            $final_array = array();
            foreach( $all_demos as $keys=>$value){
               foreach($value['demodata'] as $filtered_data){
                    $empty_array = array(
                        'free'=>$keys,
                        'premium'=>$value['premium'],
                        'slug'=>$filtered_data['slug'],
                        'title'=>$filtered_data['title'],
                        'subtitle'=>$filtered_data['subtitle'],
                        'url'=>$filtered_data['url'],
                        'tags'=>$filtered_data['tags'],
                        'parent'=>$this->templatespare_get_theme_count($keys),
                        'builder'=>isset($filtered_data['builder'])?$filtered_data['builder']:"",
                        "theme_type"=>($theme==$filtered_data['slug'] && in_array('child',$filtered_data['tags']))?'true':$keys

                    );

                    array_push($parentNode,$empty_array);

                }
            }

           
           
            $have_data_array = array();
            $no_data_array = array();
            foreach($parentNode as $finaldata){
                 //Filtered by active theme
                 $empty_array =array();
                if($theme !='all'){
                    if($finaldata['theme_type']=='true'){
                        $empty_array = array(
                            'free'=>$finaldata['free'],
                            'premium'=>$finaldata['premium'],
                            'slug'=>$finaldata['slug'],
                            'title'=>$finaldata['title'],
                            'subtitle'=>$finaldata['subtitle'],
                            'url'=>$finaldata['url'],
                            'tags'=>$finaldata['tags'],
                            'parent'=>$this->templatespare_get_theme_count($finaldata['free']),
                            'builder'=>isset($finaldata['builder'])?$finaldata['builder']:"",
                            'theme_type'=>$finaldata['theme_type']

                        );
                         array_push($have_data_array,$empty_array);
                    }
                    else if(str_contains($finaldata['premium'],$theme)){
                        $empty_array = array(
                            'free'=>$finaldata['free'],
                            'premium'=>$finaldata['premium'],
                            'slug'=>$finaldata['slug'],
                            'title'=>$finaldata['title'],
                            'subtitle'=>$finaldata['subtitle'],
                            'url'=>$finaldata['url'],
                            'tags'=>$finaldata['tags'],
                            'parent'=>$this->templatespare_get_theme_count($finaldata['free']),
                            'builder'=>isset($finaldata['builder'])?$finaldata['builder']:"",
                            'theme_type'=>$finaldata['theme_type']

                        );
                         array_push($have_data_array,$empty_array);

                    } 
                    
                    else{
                        $empty_array = array(
                            'free'=>$finaldata['free'],
                            'premium'=>$finaldata['premium'],
                            'slug'=>$finaldata['slug'],
                            'title'=>$finaldata['title'],
                            'subtitle'=>$finaldata['subtitle'],
                            'url'=>$finaldata['url'],
                            'tags'=>$finaldata['tags'],
                            'parent'=>$this->templatespare_get_theme_count($finaldata['free']),
                            'builder'=>isset($finaldata['builder'])?$finaldata['builder']:"",
                            'theme_type'=>$finaldata['theme_type']

                        );
                        array_push($no_data_array,$empty_array);
                    }

                    
                }else{
                    $empty_array = array(
                        'free'=>$finaldata['free'],
                        'premium'=>$finaldata['premium'],
                        'slug'=>$finaldata['slug'],
                        'title'=>$finaldata['title'],
                        'subtitle'=>$finaldata['subtitle'],
                        'url'=>$finaldata['url'],
                        'tags'=>$finaldata['tags'],
                        'parent'=>$this->templatespare_get_theme_count($finaldata['free']),
                        'builder'=>isset($finaldata['builder'])?$finaldata['builder']:"",
                        'theme_type'=>$finaldata['theme_type']

                    );
                    array_push($no_data_array,$empty_array);
                
                }
            
            }

            $final_array =  array_merge($have_data_array,$no_data_array);
           
            $new_data = array();
           
            foreach($final_array as $filtered){
                if($slug != 'all'){
                    if(in_array($slug,$filtered['tags'])){
                        $empty_array = array(
                            'free'=>$filtered['free'],
                            'premium'=>$filtered['premium'],
                            'slug'=>$filtered['slug'],
                            'title'=>$filtered['title'],
                            'subtitle'=>$filtered['subtitle'],
                            'url'=>$filtered['url'],
                            'tags'=>$filtered['tags'],
                            'parent'=>$filtered['parent'],
                            'builder'=>isset($filtered['builder'])?$filtered['builder']:""
                            
                        );

                        array_push($new_data,$empty_array);
                    
                    }
                }
                if($cat !='all-cat' && $d !='all' ){
                        if($theme ==  $filtered['theme_type']){
                            if(  in_array($cat,$filtered['tags'])  && in_array($d,$filtered['tags'])){
                            
                                $empty_array = array(
                                    'free'=>$filtered['free'],
                                    'premium'=>$filtered['premium'],
                                    'slug'=>$filtered['slug'],
                                    'title'=>$filtered['title'],
                                    'subtitle'=>$filtered['subtitle'],
                                    'url'=>$filtered['url'],
                                    'tags'=>$filtered['tags'],
                                    'parent'=>$filtered['parent'],
                                    'builder'=>isset($filtered['builder'])?$filtered['builder']:""
                                    
                                );

                                array_push($new_data,$empty_array);
                            
                            }
                        }else{
                            if($theme == 'all' &&  in_array($cat,$filtered['tags'])  && in_array($d,$filtered['tags'])){
                                $empty_array = array(
                                    'free'=>$filtered['free'],
                                    'premium'=>$filtered['premium'],
                                    'slug'=>$filtered['slug'],
                                    'title'=>$filtered['title'],
                                    'subtitle'=>$filtered['subtitle'],
                                    'url'=>$filtered['url'],
                                    'tags'=>$filtered['tags'],
                                    'parent'=>$filtered['parent'],
                                    'builder'=>isset($filtered['builder'])?$filtered['builder']:""
                                    
                                );

                                array_push($new_data,$empty_array);
                            
                            }
                        }
                }else{
                    
                    if($d !='all' ){
                       
                        if(in_array($d,$filtered['tags']) && $cat =='all-cat'&&  $theme ==$filtered['theme_type']  ){
                           
                            $empty_array = array(
                                'free'=>$filtered['free'],
                                'premium'=>$filtered['premium'],
                                'slug'=>$filtered['slug'],
                                'title'=>$filtered['title'],
                                'subtitle'=>$filtered['subtitle'],
                                'url'=>$filtered['url'],
                                'tags'=>$filtered['tags'],
                                'parent'=>$filtered['parent'],
                                'builder'=>isset($filtered['builder'])?$filtered['builder']:""
                            );
                            array_push($new_data,$empty_array);
                            
                        
                        }else{
                            if(in_array($d,$filtered['tags'])&&  $theme =='all'  ){
                              
                                $empty_array = array(
                                    'free'=>$filtered['free'],
                                    'premium'=>$filtered['premium'],
                                    'slug'=>$filtered['slug'],
                                    'title'=>$filtered['title'],
                                    'subtitle'=>$filtered['subtitle'],
                                    'url'=>$filtered['url'],
                                    'tags'=>$filtered['tags'],
                                    'parent'=>$filtered['parent'],
                                    'builder'=>isset($filtered['builder'])?$filtered['builder']:""
                                );
                                array_push($new_data,$empty_array);
                                
                            
                            }
                        }
                    }else if($cat !='all-cat'){
                        if( in_array($cat,$filtered['tags']) && $theme==$filtered['theme_type'] ){
                          
                            $empty_array = array(
                                'free'=>$filtered['free'],
                                'premium'=>$filtered['premium'],
                                'slug'=>$filtered['slug'],
                                'title'=>$filtered['title'],
                                'subtitle'=>$filtered['subtitle'],
                                'url'=>$filtered['url'],
                                'tags'=>$filtered['tags'],
                                'parent'=>$filtered['parent'],
                                'builder'=>isset($filtered['builder'])?$filtered['builder']:""
                            );
                            array_push($new_data,$empty_array);
                            
                        
                        }else{
                            if(in_array($cat,$filtered['tags']) && $theme =='all' ){
                              
                                $empty_array = array(
                                    'free'=>$filtered['free'],
                                    'premium'=>$filtered['premium'],
                                    'slug'=>$filtered['slug'],
                                    'title'=>$filtered['title'],
                                    'subtitle'=>$filtered['subtitle'],
                                    'url'=>$filtered['url'],
                                    'tags'=>$filtered['tags'],
                                    'parent'=>$filtered['parent'],
                                    'builder'=>isset($filtered['builder'])?$filtered['builder']:""
                                );
                                array_push($new_data,$empty_array);
                                
                            
                            }
                        }
                    }else{
                        $empty_array = array(
                            'free'=>$filtered['free'],
                            'premium'=>$filtered['premium'],
                            'slug'=>$filtered['slug'],
                            'title'=>$filtered['title'],
                            'subtitle'=>$filtered['subtitle'],
                            'url'=>$filtered['url'],
                            'tags'=>$filtered['tags'],
                            'parent'=>$filtered['parent'],
                            'builder'=>isset($filtered['builder'])?$filtered['builder']:""
                        );
                        array_push($new_data,$empty_array);
                        
                    }
                    

                 
                
                }
                

                
            }
           
            

            if(!empty($s))  {
                
                $filtered_array= $this->templatespare_search_for_id( $s,$new_data,$slug );
                $new_data = array();
                if(!empty($filtered_array)){
                   
                    foreach($filtered_array as $s){
                    
                        $empty_array = array(
                            'free'=>$s['free'],
                            'premium'=>$s['premium'],
                            'slug'=>$s['slug'],
                            'title'=>$s['title'],
                            'subtitle'=>$s['subtitle'],
                            'url'=>$s['url'],
                            'tags'=>$s['tags'],
                            'parent'=>$s['parent'],
                            'builder'=>isset($s['builder'])?$s['builder']:""
                            
                        );

                     array_push($new_data,$empty_array);
                    }
                    
                }
                
               
            }


            return $new_data;
           
            
            
        }

        function templatespare_search_for_id($s, $array,$slug) {
        
            $input_text = strtolower($s);
            $new_search_array = array();
            foreach ($array as $key => $val) {
                if (str_contains($val['slug'], $input_text)) { 
                    array_push($new_search_array, $val);
                }
                    
            }
          
            if(empty($new_search_array)){
                foreach ($array as $key => $val) {
                    if (in_array($input_text,$val['tags'])) { 
                        array_push($new_search_array, $val);
                }
    
                }
             }
              
            // if($slug!='all'){
            //     $all_demo = templatespare_templates_demo_list();
            //     $alldataarray = array();
            //     foreach($all_demo as $keys=>$value){
            //         foreach($value['demodata'] as $key=>$fdata){
            //             if(preg_grep("/$input_text/i", $fdata)){
            //                 array_push($alldataarray, $fdata);
            //             }
            //         }
            //         $alldataarray=array(
            //             'free'=>$key
            //         );

            //     }
            //     $new_search_array = array_push($array,$alldataarray);
            // }

            

             
             
          
            return $new_search_array;
            
         }

         public function templatespare_get_theme_count($parent){

            $all_demos = templatespare_templates_demo_list();
            $numberoftheme=count(array_values($all_demos[$parent]['demodata']));
           
            return $numberoftheme;

         }
    }


    

}