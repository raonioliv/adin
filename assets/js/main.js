$(document).ready(function(){
    fetch('/default/header.html')
        .then(res => res.text())
        .then(data => { 
            $('header').append(data)
        })
    fetch('/default/footer.html')
        .then(res => res.text())
        .then(data => { 
            $('footer').append(data)
        })
})
