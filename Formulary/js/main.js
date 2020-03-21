$('.toggle').click(function(){
  $('.form').animate({
    height: "toggle",
    'padding-top': "toggle",
    'padding-bottom': "toggle",
    opacity: "toggle"

  }, "slow")
})

// console.log('La tuya prro')


// var xhttp = new XMLHttpRequest()
// xhttp.onreadystatechange = function() {
//   if(this.readyState === 4 && this.status === 200) {
//     let response = JSON.parse(this.response);
//     handlerResponse(response);
//   }
// }

// xhttp.open('GET', "data/hello_world.json")
// xhttp.send()

// const handlerResponse = (response) => {
//   console.log(response);
//   var parent = document.getElementById('container')
//   response.forEach(({ element , text }) => {
//     let node = document.createElement(element)
//     node.innerText = text;
//     parent.appendChild(node);
//   });
// }


