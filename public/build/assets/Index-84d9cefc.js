import{q as S,v as h,m as b,f as s,a as m,u as o,w as B,F as c,o as a,X as C,b as e,i as g,x as p,e as M,d as f,s as x,n as T,g as V,O as z,j as F,t as N,c as j}from"./app-135ade35.js";import{_ as q}from"./MainLayout-53cf65d8.js";import D from"./Card-e2ea8c09.js";import{i as U}from"./index-76b33fd6.js";import"./ApplicationLogo-d1fd9e60.js";import"./_plugin-vue_export-helper-c27b6911.js";const A=e("h1",{class:"mt-5 mb-14 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"},[f("Все "),e("span",{class:"text-transparent bg-clip-text bg-gradient-to-r to-red-600 from-white"},"заведения")],-1),I=["onSubmit"],O=e("label",{for:"default-search",class:"mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"},"Поиск",-1),$={class:"relative"},E=e("div",{class:"absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"},[e("svg",{"aria-hidden":"true",class:"w-5 h-5 text-gray-500 dark:text-gray-400",fill:"none",stroke:"currentColor",viewBox:"0 0 24 24",xmlns:"http://www.w3.org/2000/svg"},[e("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"})])],-1),L=e("button",{type:"submit",class:"text-white absolute right-2.5 bottom-2.5 bg-neutral-700 hover:bg-neutral-800 focus:ring-4 focus:outline-none focus:ring-neutral-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-neutral-600 dark:hover:bg-neutral-700 dark:focus:ring-neutral-800"}," Поиск ",-1),W=e("svg",{class:"w-4 h-4 ml-2","aria-hidden":"true",fill:"none",stroke:"currentColor",viewBox:"0 0 24 24",xmlns:"http://www.w3.org/2000/svg"},[e("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M19 9l-7 7-7-7"})],-1),X={class:"p-3"},G=e("label",{for:"input-group-search",class:"sr-only"},"Поиск",-1),H={class:"relative"},J=e("div",{class:"absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"},[e("svg",{class:"w-5 h-5 text-gray-500 dark:text-gray-400","aria-hidden":"true",fill:"currentColor",viewBox:"0 0 20 20",xmlns:"http://www.w3.org/2000/svg"},[e("path",{"fill-rule":"evenodd",d:"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z","clip-rule":"evenodd"})])],-1),K={class:"h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200","aria-labelledby":"dropdownSearchButton"},P={class:"flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600"},Q=["id","value"],R=["for"],Y={key:0,class:"grid grid-cols-2 md:grid-cols-4 gap-4 mt-6 dark:text-neutral-400 gap-3"},le={__name:"Index",props:{establishments:{required:!0},tags:{required:!0}},setup(l){S(()=>{U()});const n=h({search:""}),d=h({searchTags:""}),i=b([]),k=()=>{d.get(route("establishments"),{preserveState:!0,preserveScroll:!0})},v=()=>{z.get(route("establishments"),{searchTagsArray:i.value},{preserveState:!0,preserveScroll:!0})},y=()=>{n.get(route("establishments"),{preserveState:!0,preserveScroll:!0})},u=b(!1),w=()=>{u.value=!u.value};return(Z,r)=>(a(),s(c,null,[m(o(C),{title:"Заведения"}),m(q,null,{default:B(()=>[A,e("form",{onSubmit:M(y,["prevent"])},[O,e("div",$,[E,g(e("input",{type:"search",id:"default-search",class:"block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-neutral-500 focus:border-neutral-500 dark:bg-neutral-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-neutral-500 dark:focus:border-neutral-500",placeholder:"Введите название заведения","onUpdate:modelValue":r[0]||(r[0]=t=>o(n).search=t)},null,512),[[p,o(n).search]]),L])],40,I),e("button",{onClick:w,id:"dropdownSearchButton","data-dropdown-toggle":"dropdownSearch",class:"mt-2 inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-blue-300 dark:bg-neutral-600 dark:hover:bg-neutral-700",type:"button"},[f("Выбор тегов"),W]),e("div",{class:T([{hidden:!u.value},"z-10 bg-white rounded-lg shadow w-60 dark:bg-neutral-700"]),id:"dropdownSearch"},[e("div",X,[G,e("div",H,[J,g(e("input",{onInput:k,"onUpdate:modelValue":r[1]||(r[1]=t=>o(d).searchTags=t),type:"text",id:"input-group-search",class:"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-neutral-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500",placeholder:"Поиск тегов"},null,544),[[p,o(d).searchTags]])])]),e("ul",K,[(a(!0),s(c,null,x(l.tags,t=>(a(),s("li",null,[e("div",P,[g(e("input",{id:"checkbox-item-"+t.id,type:"checkbox",value:t.id,"onUpdate:modelValue":r[2]||(r[2]=_=>i.value=_),class:"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"},null,8,Q),[[F,i.value]]),e("label",{for:"checkbox-item-"+t.id,class:"w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300"},N(t.name),9,R)])]))),256))]),e("a",{onClick:v,class:"flex items-center p-3 text-sm font-medium text-red-600 border-t border-gray-200 rounded-b-lg bg-gray-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-neutral-700 dark:hover:bg-gray-600 dark:text-red-100 hover:underline"}," Обновить ")],2),l.establishments?(a(),s("div",Y,[(a(!0),s(c,null,x(l.establishments,t=>(a(),j(D,{establishment:t},null,8,["establishment"]))),256))])):V("",!0)]),_:1})],64))}};export{le as default};
