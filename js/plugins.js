window.onload = function() {
  // height configuration
  var pageHeight = window.innerHeight
  document.getElementById('left').style.height =  pageHeight -30 + 'px', 'important'
  document.getElementById('right').style.height =  pageHeight -30 + 'px', 'important'
  document.getElementsByTagName('body')[0].style.height = pageHeight + 'px', 'important'
};

function menu(v) {
  // unset all active-li class attribute
  var a = document.querySelectorAll('.active-li').length
  for (var i = 0; i <= a; i++) {
    $('.active-li').attr('class', '')
  }
  // set active-li class attribute
  var liClass = v.getAttribute('class')
  var liId = v.getAttribute('id')
  var li = document.getElementById(liId)
  var liNewClass = liClass + ' active-li'
  li.setAttribute('class', liNewClass)
  // request send
  async(liId)
}

function async(liId) {
  var contentBox = document.getElementById('content')
  var xhttp = new XMLHttpRequest()
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      if (xhttp.responseText == 'error') {
        contentBox.innerHTML = '<span class="error-msg">Hiba történt a betöltés közben, próbáld újra később!</span>'
      } else {
        contentBox.innerHTML = xhttp.responseText
      }
    }
  };
  xhttp.open('GET', 'controller/controller.php?required=menu&&value=' + liId + '&&by=id&&order=ASC&&page=1&&offset=20', true)
  xhttp.send()
  $('.table-responsive').css('overflowX', 'hidden')
}

function movieTrCollapse(m) {
  var trId = m.getAttribute('id')
  var dId = document.getElementById(trId).children[5].getAttribute('id')
  var item = document.getElementById(dId)
  if (item.style.whiteSpace === 'normal') {
    $('.movie-tr-collapse').css('whiteSpace', 'nowrap')
    $('.movie-tr-collapse').css('overflow', 'hidden')
    $('.movie-tr-collapse').css('wordBreak', 'normal')
  } else {
    $('.movie-tr-collapse').css('whiteSpace', 'nowrap')
    $('.movie-tr-collapse').css('overflow', 'hidden')
    $('.movie-tr-collapse').css('wordBreak', 'normal')
    item.style.whiteSpace = 'normal'
    item.style.overflow = 'visible'
    item.style.wordBreak = 'breakAll'
  }
}

function pagination(v) {
  var page = v.value;
  var xhttp = new XMLHttpRequest();
  xhttp.open('GET', 'controller/controller.php?required=pagination&&value=' + page, true);
  xhttp.send();
}
