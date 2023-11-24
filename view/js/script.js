const next = document.querySelector('.next')
const prev = document.querySelector('.prev')
const comment = document.querySelector('#list-comment')
const commentItem = document.querySelectorAll('#list-comment .item')
var translateY = 0
var count = commentItem.length

if(next){
  next.addEventListener('click', function (event) {
    event.preventDefault()
    if (count == 1) {
      // Xem hết bình luận
      return false
    }
    translateY += -400
    comment.style.transform = `translateY(${translateY}px)`
    count--
  })
}

if(prev){
  prev.addEventListener('click', function (event) {
    event.preventDefault()
    if (count == 3) {
      // Xem hết bình luận
      return false
    }
    translateY += 400
    comment.style.transform = `translateY(${translateY}px)`
    count++
  })
}

const icon = document.querySelector('.icon');
const searchBox = document.querySelector('.searchBox');
icon.onclick = function() {
    searchBox.classList.toggle('active')

}


/* search */

let numbers = document.querySelectorAll('.number').value;
const plus = document.querySelectorAll('.plus');
const minus = document.querySelectorAll('.minus');
if(numbers){
  plus.forEach((element, key) => {
    element.addEventListener('click', () => {
        numbers[key].textContent++;
   
      // document.querySelector('.number').innerHTML = numbers;
  
    });
  });
}


minus.forEach((element, key) => {
  element.addEventListener('click', () => {
      numbers[key].textContent--;
      if(numbers[key].textContent <0){
        return numbers[key].textContent =0 ;
      }
     
  });


});

/*end search */ 
