import { TabPlugin } from './tabPlugin';

function orderTabs(){
    document.addEventListener('DOMContentLoaded', ()=> {
        new TabPlugin(".tab-container");
    });
}

export default orderTabs;
