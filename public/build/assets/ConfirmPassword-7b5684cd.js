import{v as n,c as d,w as t,o as l,a,u as o,X as c,b as e,d as p,n as u,e as f}from"./app-beea0983.js";import{_}from"./GuestLayout-90e7c95e.js";import{_ as w,a as b}from"./TextInput-f14b0b6d.js";import{_ as x}from"./InputLabel-6e852155.js";import{P as g}from"./PrimaryButton-bb6e904b.js";import"./ApplicationLogo-4341974b.js";import"./_plugin-vue_export-helper-c27b6911.js";const h=e("div",{class:"mb-4 text-sm text-gray-600 dark:text-gray-400"}," This is a secure area of the application. Please confirm your password before continuing. ",-1),y=["onSubmit"],v={class:"flex justify-end mt-4"},j={__name:"ConfirmPassword",setup(P){const s=n({password:""}),i=()=>{s.post(route("password.confirm"),{onFinish:()=>s.reset()})};return(V,r)=>(l(),d(_,null,{default:t(()=>[a(o(c),{title:"Confirm Password"}),h,e("form",{onSubmit:f(i,["prevent"])},[e("div",null,[a(x,{for:"password",value:"Password"}),a(w,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:o(s).password,"onUpdate:modelValue":r[0]||(r[0]=m=>o(s).password=m),required:"",autocomplete:"current-password",autofocus:""},null,8,["modelValue"]),a(b,{class:"mt-2",message:o(s).errors.password},null,8,["message"])]),e("div",v,[a(g,{class:u(["ml-4",{"opacity-25":o(s).processing}]),disabled:o(s).processing},{default:t(()=>[p(" Confirm ")]),_:1},8,["class","disabled"])])],40,y)]),_:1}))}};export{j as default};