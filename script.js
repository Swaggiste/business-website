document.getElementById("contactForm").addEventListener("submit", function(e){
    e.preventDefault(); // stop page reload

    var form = e.target;
    var formData = new FormData(form);

    fetch(form.action, {
        method: form.method,
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        var messageElem = document.getElementById("formMessage");
        if(data.trim() === "success"){
            messageElem.style.color = "green";
            messageElem.innerText = "Thank you! Your message has been sent.";
            messageElem.style.display = "block";
            form.reset();
        } else {
            messageElem.style.color = "red";
            messageElem.innerText = "Oops! Something went wrong. Please try again.";
            messageElem.style.display = "block";
        }
    })
    .catch(error => {
        var messageElem = document.getElementById("formMessage");
        messageElem.style.color = "red";
        messageElem.innerText = "Error sending message.";
        messageElem.style.display = "block";
    });
});
