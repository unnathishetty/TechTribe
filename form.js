function sendMail()
{
    var params={
        email:document.getElementById("email_id").value,
        message:document.getElementById("message").value
    };
}

const serviceid="service_x7h9w0j";
const temp="template_u0l5r0c";

emailjs.send(serviceid,temp,params).then(
    res =>{
        document.getElementById("email_id").value=" ";
        document.getElementById("message").value=" ";
        console.log(res);
        alert("SUCCESS");
    }
)
.catch(err=>console.log(err));
