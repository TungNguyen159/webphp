const rightbtn = document.querySelector('.fa-angle-right')
const leftbtn = document.querySelector('.fa-angle-left')
const imgNuber =document.querySelectorAll('.slider-content-left img')
let index=0
rightbtn.addEventListener("click",function(){
  index=index+1
  if(index>imgNuber.length-1){
    index=0
  }
  document.querySelector(".slider-content-left").style.right = index *100+"%"
})
leftbtn.addEventListener("click",function(){
  index=index-1
  if(index<=0){
    index=imgNuber.length-1
  }
  document.querySelector(".slider-content-left").style.right = index *100+"%"
})
function imgauto(){
  index = index + 1
  if(index>imgNuber.length-1){
    index=0
  }
  document.querySelector(".slider-content-left").style.right = index *100+"%"
}
setInterval(imgauto,3000)
/****slide */
const rightbtntwo =document.querySelector('.fa-angle-right-two')
const leftbtntwo =document.querySelector('.fa-angle-left-two')
const imgNubertwo =document.querySelectorAll('.slide-product-content-item ')
rightbtntwo.addEventListener("click",function(){
  index = index + 1;
  if(index>imgNubertwo.length-1){
    index=0
  }
  document.querySelector(".slide-product-content-item-content").style.right = index *100+"%"
})
leftbtntwo.addEventListener("click",function(){
  index = index - 1
  if(index <=0){
    index=imgNubertwo.length-1
  }
  document.querySelector(".slide-product-content-item-content").style.right = index *100+"%"
})
