import{i as d,A as i,o as s,f as o,b as l,t as c,m,y as p}from"./app-7682dd45.js";const f={class:"text-sm text-red-600 dark:text-red-400"},k={__name:"InputError",props:{message:{type:String}},setup(t){return(r,e)=>d((s(),o("div",null,[l("p",f,c(t.message),1)],512)),[[i,t.message]])}},g=["value"],v={__name:"TextInput",props:{modelValue:{required:!0}},emits:["update:modelValue"],setup(t,{expose:r}){const e=m(null);return p(()=>{e.value.hasAttribute("autofocus")&&e.value.focus()}),r({focus:()=>e.value.focus()}),(u,a)=>(s(),o("input",{class:"border-neutral-300 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm",value:t.modelValue,onInput:a[0]||(a[0]=n=>u.$emit("update:modelValue",n.target.value)),ref_key:"input",ref:e},null,40,g))}};export{v as _,k as a};
