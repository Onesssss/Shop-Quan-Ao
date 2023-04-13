    // ------Menu-item---------------
	const header = document.querySelector("header")
	window.addEventListener("scroll",function(){
		x = window.pageXOffset
		if(x>0){
			header.classList.add("sticky")
		}
		else {
			header.classList.remove("sticky")
		}
	})
    // ------Menu-slidebar-cartegory---------
    const a = document.querySelectorAll(".cartegory-left-li")
    a.forEach(function(menu,index){
        menu.addEventListener("click",function(){
            menu.classList.toggle("block")
        })
    })
	// ------Product---------
// -------Phóng to , thu nhỏ ảnh -------
const bigImg = document.querySelector(".product-content-left-big-img img")
const smallImg = document.querySelectorAll(".product-content-left-small-img img")
	smallImg.forEach(function(imgItem,X){
		imgItem.addEventListener("click",function(){
			bigImg.src = imgItem.src
		})
	})




	const gioithieu = document.querySelector(".gioithieu")
	const chitiet = document.querySelector(".chitiet")
	const baoquan = document.querySelector(".baoquan")
	if(gioithieu){
		gioithieu.addEventListener("click",function(){
			document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "block"
			document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none"
			document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none"
		})
	}
	if(chitiet){
		chitiet.addEventListener("click",function(){
			document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "none"
			document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block"
			document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none"
			})	
	}
	if(baoquan){
		baoquan.addEventListener("click",function(){
			document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "none"
			document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none"
			document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "block"
			})	
	}
	const button = document.querySelector(".product-content-right-bottom-top")
	if(button){
		button.addEventListener("click",function(){
			document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
		})
	}




	

	