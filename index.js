const express = require('express');
require('dotenv').config();
const port =process.env.PORT || 3000;
const app = express();
const bodyParser=require('body-parser')
const requestIp = require('request-ip');
const cors=require('cors')
app.use(cors())
app.use(express.static('public'));
app.use(requestIp.mw())
let demoEmail=['email1@gmail.com','email2@gmail.com','email3@gmail.com','truemail@gmail.com','itmail@SpeechGrammarList.com']
//52.163.244.143
app.use(bodyParser.urlencoded({ extended: false }))
app.use(bodyParser.json())
app.get('/',(req,res)=>{
    res.sendFile('index.html');
})
app.post('/', (request, response) => {
    const ip = request.clientIp;
    console.log(ip)
    console.log(request.body)

    let ar=[]
    if(request.body){
        let inp=Object.values(request.body)
        inp.map(v => {
            if(demoEmail.find((a)=>a==v)){ar.push(true)}else{ar.push(false)}
        })
        response.send(JSON.stringify({status:true,result:ar}))   
    }else{
        response.send(JSON.stringify({status:false,error:'Null Email Address.'}))
    }
      
});

const server = app.listen(port, (error) => {
    if (error) return console.log(`Error: ${error}`);
 
    console.log(`Server listening on port ${server.address().port}`);
});

