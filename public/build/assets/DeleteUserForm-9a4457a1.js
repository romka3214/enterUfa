import{m,v as f,f as x,a as t,w as o,b as e,p as y,o as g,d as c,u as a,B as w,n as h}from"./app-12a73247.js";import{D as _}from"./DangerButton-2365e538.js";import{_ as k,a as v}from"./TextInput-265d4958.js";import{_ as C}from"./InputLabel-adc056f0.js";import{_ as V,a as B}from"./SecondaryButton-5c1c8562.js";import"./_plugin-vue_export-helper-c27b6911.js";const D={class:"space-y-6"},U=e("header",null,[e("h2",{class:"text-lg font-medium text-gray-900 dark:text-gray-100"},"Удаление аккаунта"),e("p",{class:"mt-1 text-sm text-gray-600 dark:text-gray-400"}," Ваш аккаунт будет удален без возможности восстановления. ")],-1),$={class:"p-6"},b=e("h2",{class:"text-lg font-medium text-gray-900 dark:text-gray-100"}," Вы уверены что хотите удалить свой акаунт? ",-1),K=e("p",{class:"mt-1 text-sm text-gray-600 dark:text-gray-400"}," Аккаунт будет удалён БЕЗВОЗВРАТНО. Что бы подтвердить действие введите свой пароль ",-1),N={class:"mt-6"},E={class:"mt-6 flex justify-end"},q={__name:"DeleteUserForm",setup(F){const r=m(!1),l=m(null),s=f({password:""}),p=()=>{r.value=!0,y(()=>l.value.focus())},d=()=>{s.delete(route("profile.destroy"),{preserveScroll:!0,onSuccess:()=>n(),onError:()=>l.value.focus(),onFinish:()=>s.reset()})},n=()=>{r.value=!1,s.reset()};return(I,i)=>(g(),x("section",D,[U,t(_,{onClick:p},{default:o(()=>[c("Удалить")]),_:1}),t(V,{show:r.value,onClose:n},{default:o(()=>[e("div",$,[b,K,e("div",N,[t(C,{for:"password",value:"Password",class:"sr-only"}),t(k,{id:"password",ref_key:"passwordInput",ref:l,modelValue:a(s).password,"onUpdate:modelValue":i[0]||(i[0]=u=>a(s).password=u),type:"password",class:"mt-1 block w-3/4",placeholder:"Пароль",onKeyup:w(d,["enter"])},null,8,["modelValue","onKeyup"]),t(v,{message:a(s).errors.password,class:"mt-2"},null,8,["message"])]),e("div",E,[t(B,{onClick:n},{default:o(()=>[c(" Отмена ")]),_:1}),t(_,{class:h(["ml-3",{"opacity-25":a(s).processing}]),disabled:a(s).processing,onClick:d},{default:o(()=>[c(" УДАЛИТЬ ")]),_:1},8,["class","disabled"])])])]),_:1},8,["show"])]))}};export{q as default};
