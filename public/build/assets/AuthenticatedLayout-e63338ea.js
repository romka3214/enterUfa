import{A as p}from"./ApplicationLogo-4341974b.js";import{_ as n,a as m,b as v,c as d}from"./ResponsiveNavLink-c9d514b3.js";import{m as _,o as l,f as i,b as e,a as s,w as a,u as b,l as x,d as r,t as u,n as h,r as f,g}from"./app-beea0983.js";const k={class:"min-h-screen bg-neutral-100 dark:bg-neutral-900"},w={class:"bg-white dark:bg-neutral-800 border-b border-neutral-100 dark:border-neutral-700"},y={class:"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"},$={class:"flex justify-between h-16"},C={class:"flex"},M={class:"shrink-0 flex items-center"},B={class:"hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"},N={class:"hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"},j={class:"hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"},L={class:"hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"},V={class:"hidden sm:flex sm:items-center sm:ml-6"},A={class:"ml-3 relative"},z={class:"inline-flex rounded-md"},D={type:"button",class:"inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-neutral-500 dark:text-neutral-400 bg-white dark:bg-neutral-800 hover:text-neutral-700 dark:hover:text-neutral-300 focus:outline-none transition ease-in-out duration-150"},S=e("svg",{class:"ml-2 -mr-0.5 h-4 w-4",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20",fill:"currentColor"},[e("path",{"fill-rule":"evenodd",d:"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z","clip-rule":"evenodd"})],-1),E={class:"-mr-2 flex items-center sm:hidden"},T={class:"h-6 w-6",stroke:"currentColor",fill:"none",viewBox:"0 0 24 24"},q={class:"pt-2 pb-3 space-y-1"},F={class:"pt-4 pb-1 border-t border-neutral-200 dark:border-neutral-600"},G={class:"px-4"},H={class:"font-medium text-base text-neutral-800 dark:text-neutral-200"},I={class:"font-medium text-sm text-neutral-500"},J={class:"mt-3 space-y-1"},K={key:0,class:"bg-white dark:bg-neutral-800 shadow"},O={class:"max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"},X={__name:"AuthenticatedLayout",setup(P){const o=_(!1);return(t,c)=>(l(),i("div",null,[e("div",k,[e("nav",w,[e("div",y,[e("div",$,[e("div",C,[e("div",M,[s(b(x),{href:t.route("home")},{default:a(()=>[s(p,{class:"block h-9 w-auto fill-current text-neutral-800 dark:fill-white"})]),_:1},8,["href"])]),e("div",B,[s(n,{href:t.route("dashboard"),active:t.route().current("dashboard")},{default:a(()=>[r(" Заведение ")]),_:1},8,["href","active"])]),e("div",N,[s(n,{href:t.route("dashboard.events"),active:t.route().current("dashboard.events")},{default:a(()=>[r(" События ")]),_:1},8,["href","active"])]),e("div",j,[s(n,{href:t.route("dashboard.reviews"),active:t.route().current("dashboard.reviews")},{default:a(()=>[r(" Отзывы ")]),_:1},8,["href","active"])]),e("div",L,[s(n,{href:t.route("dashboard.photos"),active:t.route().current("dashboard.photos")},{default:a(()=>[r(" Фото ")]),_:1},8,["href","active"])])]),e("div",V,[e("div",A,[s(v,{align:"right",width:"48"},{trigger:a(()=>[e("span",z,[e("button",D,[r(u(t.$page.props.auth.user.name)+" ",1),S])])]),content:a(()=>[s(m,{href:t.route("profile.edit")},{default:a(()=>[r(" Профиль ")]),_:1},8,["href"]),s(m,{href:t.route("logout"),method:"post",as:"button"},{default:a(()=>[r(" Выйти ")]),_:1},8,["href"])]),_:1})])]),e("div",E,[e("button",{onClick:c[0]||(c[0]=Q=>o.value=!o.value),class:"inline-flex items-center justify-center p-2 rounded-md text-neutral-400 dark:text-neutral-500 hover:text-neutral-500 dark:hover:text-neutral-400 hover:bg-neutral-100 dark:hover:bg-neutral-900 focus:outline-none focus:bg-neutral-100 dark:focus:bg-neutral-900 focus:text-neutral-500 dark:focus:text-neutral-400 transition duration-150 ease-in-out"},[(l(),i("svg",T,[e("path",{class:h({hidden:o.value,"inline-flex":!o.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M4 6h16M4 12h16M4 18h16"},null,2),e("path",{class:h({hidden:!o.value,"inline-flex":o.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M6 18L18 6M6 6l12 12"},null,2)]))])])])]),e("div",{class:h([{block:o.value,hidden:!o.value},"sm:hidden"])},[e("div",q,[s(d,{href:t.route("dashboard"),active:t.route().current("dashboard")},{default:a(()=>[r(" Панель управления ")]),_:1},8,["href","active"])]),e("div",F,[e("div",G,[e("div",H,u(t.$page.props.auth.user.name),1),e("div",I,u(t.$page.props.auth.user.email),1)]),e("div",J,[s(d,{href:t.route("profile.edit")},{default:a(()=>[r(" Профиль ")]),_:1},8,["href"]),s(d,{href:t.route("logout"),method:"post",as:"button"},{default:a(()=>[r(" Выйти ")]),_:1},8,["href"])])])],2)]),t.$slots.header?(l(),i("header",K,[e("div",O,[f(t.$slots,"header")])])):g("",!0),e("main",null,[f(t.$slots,"default")])])]))}};export{X as _};
