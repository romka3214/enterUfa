import{f as r,a,u as l,w as o,F as c,o as n,X as x,b as e,t as s,s as _,c as h}from"./app-12a73247.js";import{_ as g}from"./MainLayout-bfe174bc.js";import{S as v,a as f}from"./swiper-bundle.min-2b88d2a7.js";import"./ApplicationLogo-74fc9881.js";import"./_plugin-vue_export-helper-c27b6911.js";const p={class:"mt-5 mb-14 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"},S={class:"grid grid-cols-1 md:grid-cols-2 gap-4 mt-6 dark:text-neutral-400 gap-3"},w={class:"photos"},k=["src"],b={class:"text"},B={class:"text-xl"},C={class:"text-xl"},y={class:"text-xl"},E={__name:"Single",props:{event:{required:!0}},setup(t){const d=i=>{console.log(i)},m=()=>{console.log("slide change")};return(i,F)=>(n(),r(c,null,[a(l(x),{title:t.event.name},null,8,["title"]),a(g,null,{default:o(()=>[e("h1",p,"Мероприятие "+s(t.event.name),1),e("div",S,[e("div",w,[a(l(v),{speed:1e3,"slides-per-view":1,onSwiper:d,onSlideChange:m},{default:o(()=>[(n(!0),r(c,null,_(t.event.photos,u=>(n(),h(l(f),null,{default:o(()=>[e("img",{class:"object-cover",src:u.url,alt:""},null,8,k)]),_:2},1024))),256))]),_:1})]),e("div",b,[e("div",B,"Описание: "+s(t.event.description),1),e("div",C,"Начало: "+s(t.event.date_start),1),e("div",y,"Конец: "+s(t.event.date_end),1)])])]),_:1})],64))}};export{E as default};
