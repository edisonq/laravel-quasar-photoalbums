(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([[2],{"713b":function(t,e,a){"use strict";a.r(e);var n=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("q-layout",{attrs:{view:"lHh Lpr lFf"}},[a("q-header",{attrs:{elevated:""}},[a("q-toolbar",[a("q-btn",{attrs:{flat:"",dense:"",round:"",icon:"menu","aria-label":"Menu"},on:{click:function(e){t.leftDrawerOpen=!t.leftDrawerOpen}}}),a("q-toolbar-title",[t._v(" Albums ")]),a("div",[t._v("Albums v"+t._s(t.$q.version))])],1)],1),a("q-drawer",{attrs:{"show-if-above":"",bordered:"","content-class":"bg-grey-1",breakpoint:400},model:{value:t.leftDrawerOpen,callback:function(e){t.leftDrawerOpen=e},expression:"leftDrawerOpen"}},[a("q-scroll-area",{staticStyle:{height:"calc(100% - 150px)","margin-top":"150px","border-right":"1px solid #ddd"}},[a("q-list",[a("q-item-label",{staticClass:"text-grey-8",attrs:{header:""}},[t._v("\n          Essential Links\n        ")]),t._l(t.essentialLinks,(function(e){return a("EssentialLink",t._b({key:e.title},"EssentialLink",e,!1))}))],2)],1),a("q-img",{staticClass:"absolute-top",staticStyle:{height:"150px"},attrs:{src:"https://cdn.quasar.dev/img/material.png"}},[a("div",{staticClass:"absolute-bottom bg-transparent"},[a("q-avatar",{staticClass:"q-mb-sm",attrs:{size:"56px"}},[a("img",{attrs:{src:"https://avatars.githubusercontent.com/u/1428965?s=400&u=2b6e184a65a058d82560039f86ec15699bd2b659&v=4"}})]),a("div",{staticClass:"text-weight-bold"},[t._v("Edison Quinones")]),a("div",[t._v("@edisonq")])],1)])],1),a("q-page-container",[a("router-view")],1)],1)},i=[],s=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("q-item",{attrs:{clickable:"",tag:"a",target:"_blank",href:t.link}},[t.icon?a("q-item-section",{attrs:{avatar:""}},[a("q-icon",{attrs:{name:t.icon}})],1):t._e(),a("q-item-section",[a("q-item-label",[t._v(t._s(t.title))]),a("q-item-label",{attrs:{caption:""}},[t._v("\n      "+t._s(t.caption)+"\n    ")])],1)],1)},l=[],r={name:"EssentialLink",props:{title:{type:String,required:!0},caption:{type:String,default:""},link:{type:String,default:"#"},icon:{type:String,default:""}}},o=r,c=a("2877"),u=a("66e5"),p=a("4074"),b=a("0016"),d=a("0170"),m=a("eebe"),v=a.n(m),g=Object(c["a"])(o,s,l,!1,null,null,null),q=g.exports;v()(g,"components",{QItem:u["a"],QItemSection:p["a"],QIcon:b["a"],QItemLabel:d["a"]});const f=[{title:"Gallery",caption:"Show all pictures",icon:"collections",link:"https://quasar.dev"},{title:"Settings",caption:"Show all pictures",icon:"settings",link:"https://quasar.dev"},{title:"Logout",caption:"Sign-out",icon:"logout",link:"https://awesome.quasar.dev"}];var h={name:"MainLayout",components:{EssentialLink:q},data(){return{leftDrawerOpen:!1,essentialLinks:f}}},w=h,k=a("4d5a"),_=a("e359"),Q=a("65c6"),L=a("9c40"),y=a("6ac5"),S=a("9404"),x=a("4983"),E=a("1c1c"),O=a("068f"),D=a("cb32"),C=a("09e3"),I=Object(c["a"])(w,n,i,!1,null,null,null);e["default"]=I.exports;v()(I,"components",{QLayout:k["a"],QHeader:_["a"],QToolbar:Q["a"],QBtn:L["a"],QToolbarTitle:y["a"],QDrawer:S["a"],QScrollArea:x["a"],QList:E["a"],QItemLabel:d["a"],QImg:O["a"],QAvatar:D["a"],QPageContainer:C["a"]})}}]);