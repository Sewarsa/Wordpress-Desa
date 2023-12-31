const el = wp.element.createElement;
const categoryIcon = el('svg',
    {
        width: 20,
        height: 20
    },


    el("path", { fill: "#474745", d: "M0.1,10.7C-0.2,7.4,1.4,3,5.8,1C9.7-0.9,14.5,0.1,17,2.8c-0.4,0-0.8-0.1-1.2-0.1 c-1.5,0-2.7,1.1-3,2.6c0,0.2,0,0.4,0,0.6c0,3.2,0,6.4,0,9.5c0,1.1,0,2.3,0,3.4c0,0.6-0.3,1-0.8,1.1c-0.6,0.2-1.2-0.2-1.3-0.9 c0-0.1,0-0.2,0-0.2c0-1.4,0-2.8,0-4.2c0-0.7,0-1.5-0.1-2.2c-0.3-2.2-2.1-4-4.3-4.5C4,7.4,1.8,8.3,0.5,10.3 C0.4,10.4,0.3,10.5,0.1,10.7z" }),
    el("path", { fill: "#474745", d: "M14.5,18.9c0-0.7,0-1.3,0-1.9c0-1.1,0-2.3,0-3.4c0-0.2,0.1-0.3,0.3-0.3c0.7,0,1.4,0,2,0 c0.6,0,1-0.4,1-0.9c0-0.6-0.4-1-1-1c-0.7,0-1.4,0-2,0c-0.3,0-0.4-0.1-0.4-0.3c0-1.7,0-3.5,0-5.2c0-0.7,0.3-1.1,0.9-1.3 c0.5-0.1,1.1,0.2,1.2,0.7c0.1,0.2,0.1,0.4,0.1,0.6c0.1,0.6,0.5,0.9,1.1,0.9c0.6,0,1-0.5,0.9-1.2c0,0,0-0.1,0-0.2 c1.2,1.7,1.6,4.7,0.8,7.5C18.7,15.6,17.1,17.6,14.5,18.9z", }),
    el("path", { fill: "#474745", d: "M8.9,13.5c0,2.1-1.7,3.7-3.7,3.7s-3.7-1.7-3.7-3.8c0-2.1,1.7-3.7,3.8-3.7 C7.2,9.7,8.9,11.3,8.9,13.5z" }),
    el("path", { fill: "#474745", d: "M5.8,19.1c1.1-0.2,2.1-0.6,3-1.3C8.9,18.5,8.9,19.3,9,20C7.9,19.9,6.8,19.6,5.8,19.1z" })

);
wp.blocks.updateCategory('awpa', { icon: categoryIcon });