<!DOCTYPE html>
<html>
<head>
  <title>bot</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/botui/build/botui.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/botui/build/botui-theme-default.css" />
</head>
<body>
<script src="https://cdn.jsdelivr.net/vue/latest/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/botui/build/botui.js"></script>  
    <div class="botui-app-container" id="botui-app">
  <bot-ui></bot-ui>
</div>

    <script type="text/javascript">
      

const chitchat = {
    loadingIndex: null,

    input: {},

    init: function() {
        this.botui = new BotUI('botui-app');

        this.demo();

        //setInterval(() => { this.oi() }, 1000);
    },

 edu:function(){
   this.botui.message.add({
    delay:1000,
        loading:true,
        type:'html',
        content:'<b>Eligibility</b>\
       A term loan granted to Indian Nationals for pursuing higher education in India or abroad where admission has been secured <br>\
       <b>Loan Amount</b>\
       <li>For studies in India - maximum Rs. 10 lacs</li>\
       <li>Studies abroad - maximum Rs. 20 lacs</li><br>\
       <b>Repayment</b>\
       <li>Repayment will commence one year after completion of course.</li>\
       <li>Loan to be repaid in 15 years after the commencement of repayment</li>\
       <li>In case second loan is availed for higher studies later, to repay the combined loan amount in 15 years after completion of second course</li>\<br>\
       '
   }).then(() => {
                return this.botui.message.bot({
                    delay: 500,
                    content: ' [apply online](https://www.vidyalakshmi.co.in/Students/index)'
                });
            }).then(() => {
                return this.botui.action.button({
                  
                    delay: 1000,
                    action:[
            {
            text:'loan schemes',
            value:'loan'
          },
          {
              text:'Helpline number',
              value:'help'

          },
           {
              text:'FAQs',
              value:'faq'

          }
            ]

                });
            }) .then(res => {
                this.botui.message
                    .bot({
                        delay: 200,
                        loading: true
                    })
                    
                
                    .then(index => {
                        this.loadingIndex = index;

                        switch (res.value) {
                            case 'loan':
                                this.loan();
                                break;
                            case 'help':
                                this.help();
                                break;
                            case 'faq':
                                this.faq();
                                break;
                               
                            default:
                           
                        }
                    });
            });
      
    
        


},    
 gold:function(){
   this.botui.message.add({
    delay:1000,
        loading:true,
        type:'html',
        content:'<b>Eligibility</b>\
       18 years and above and Profession can be any individual (singly or jointly) with Steady source of income including: Bank’s Employees, Pensioners. (No Proof of income required) <br>\
       <b>Loan Amount</b>\
       <li>MAXIMUM : Rs 20.00 lacs</li>\
       <li>MINIMUM : Rs 20,000/-</li><br>\
       <b>Repayment Period</b>\
       <li>Gold Loan - Maximum 36 months</li>\
       <li>Liquid Gold Loan - Maximum 36 months</li>\
       <li>Bullet Repayment Gold Loan - Maximum 12 months</li>\<br>\
       <b>Interest rate</b>\
       <li> 1.25% above the MCLR-1yr,</li>\
       '
   }).then(() => {
                return this.botui.action.button({
                  
                    delay: 1000,
                    action:[
            {
            text:'loan schemes',
            value:'loan'
          },
          {
              text:'Helpline number',
              value:'help'

          },
           {
              text:'FAQs',
              value:'faq'

          }
            ]

                });
            }) .then(res => {
                this.botui.message
                    .bot({
                        delay: 200,
                        loading: true
                    })
                    
                
                    .then(index => {
                        this.loadingIndex = index;

                        switch (res.value) {
                            case 'loan':
                                this.loan();
                                break;
                            case 'help':
                                this.help();
                                break;
                            case 'faq':
                                this.faq();
                                break;
                               
                            default:
                           
                        }
                    });
            });
      
    
        


},    
 home:function(){
   this.botui.message.add({
    delay:2000,
        loading:true,
        type:'html',
        content:'Avail upto Rs.2.67 lakhs interest subsidy under PMAY-CLSS.\
       '
   }).then(() => {
                return this.botui.message.bot({
                    delay: 1000,
                    content: 'To download Home Loans Application Form [click here](https://homeloans.sbi/downloads/Home-Loan-Application-Form.pdf)'
                });
            }).then(() => {
                return this.botui.action.button({
                  
                    delay: 1000,
                    action:[
            {
            text:'loan schemes',
            value:'loan'
          },
          {
              text:'Helpline number',
              value:'help'

          },
           {
              text:'FAQs',
              value:'faq'

          }
            ]

                });
            }) .then(res => {
                this.botui.message
                    .bot({
                        delay: 200,
                        loading: true
                    })
                    
                
                    .then(index => {
                        this.loadingIndex = index;

                        switch (res.value) {
                            case 'loan':
                                this.loan();
                                break;
                            case 'help':
                                this.help();
                                break;
                            case 'faq':
                                this.faq();
                                break;
                               
                            default:
                           
                        }
                    });
            });
      
    
        


},    

agri:function(){
this.botui.message.add({
        delay:1000,
        loading:true,
        content: 'click here[![product image](https://www.sbi.co.in/portal/documents/23399/14460616/kcc2.jpg/f7329e78-fcfd-4e22-b7a8-9a6450e8e92d?t=1494254228435)](https://www.sbi.co.in/portal/web/agriculture-banking/kcc)<br>\
       Tractor Loan[![product image](https://www.sbi.co.in/portal/documents/23399/14460616/Tracktor-Loan-scheme.png/1b84028a-ad79-4989-af02-6e3dfd382376?t=1456314224694)](https://www.sbi.co.in/portal/web/agriculture-banking/tractor-loan)<br>\
click here[![product image](https://www.sbi.co.in/portal/documents/23399/14460616/Agri-Gold-Banner.jpg/66810bd8-c205-49df-b6b6-d8930dd3cb9e?t=1494254808588)](https://www.sbi.co.in/portal/web/agriculture-banking/gold-loan)<br>\
High value Agri Loan[![product image](https://www.sbi.co.in/portal/documents/23399/14460616/Banner-004.png/51c06d64-361d-4bc0-ae32-396016eac7ff?t=1448879570758)](https://www.sbi.co.in/portal/web/agriculture-banking/agricultural-banking)\
       '
        })



}    ,
    loan: function() {
        this.botui.message.bot({
      
       
        content:'choose above option'
        }),
         this.botui.action.button({
               action:[
            {
            text:'Student loan',
            value:'edu'
          },
          {
              text:'Agricultural loan',
              value:'agri'

          },
          {
              text:'Gold loan',
              value:'gold'

          },
          {
              text:'Home loans',
              value:'home'

          }
            ]

            })    .then(res => {
                this.botui.message
                    .bot({
                        delay: 200,
                        loading: true
                    })
                    
                
                    .then(index => {
                        this.loadingIndex = index;

                        switch (res.value) {
                            
                                case 'edu':
                                this.edu();
                                break;
                                case 'agri':
                                this.agri();
                                break;
                                case 'gold':
                                this.gold();
                                break;
                                case 'home':
                                this.home();
                                break;
                            default:
                           
                        }
                    });
            })         
         .catch(function() {});
    },

    help: function() {
        
      

        this.botui.action.text({
                     delay: 400,
        action: {
          size: 18,
         
          sub_type: 'text',
          placeholder: 'enter region'
        }
                })  .then(res => {
              this.input.name = res.value;
              if(this.input.name=="chennai"){
                this.botui.message.add({
                    delay:1000,
                    loading:true,
                    type:'html',
                    content: '<b>email</b>agmcustomer.lhoche@sbi.co.in<br>\
<b>Grievance Cell Tel no. </b>:(044)28214285/28266141'
                });
              }
              else if(this.input.name=="bhopal"){
                this.botui.message.add({
                    delay:1000,
                    loading:true,
                    type:'html',
                    content: '<b>email</b> \
agmcustomer.lhobho@sbi.co.in<br>\
<b>Grievance Cell Telno.</b>:\(0755)4288210/2575226'
                });
              }
              else if(this.input.name=="delhi"){
                this.botui.message.add({
                    delay:1000,
                    loading:true,
                    type:'html',
                    content: '<b>email</b> \
agmcustomer.lhodel@sbi.co.inbr>\
<b>Grievance Cell Telno.</b>:\(011)23407121/23407657/23407480'
                });
              }
               else if(this.input.name=="hyderabad"){
                this.botui.message.add({
                    delay:1000,
                    loading:true,
                    type:'html',
                    content: '<b>email</b> \
agmcustomer.lhohyd@sbi.co.in<br>\
<b>Grievance Cell Telno.</b>:\03322489333/22436531/22624954'
                });
              }

             else{
              this.botui.message.add({
                    delay:1000,
                    loading:true,
                    type:'html',
                    content: 'not available'
                });  
             }   
            }).then(() => {
                return this.botui.action.button({
                  
                    delay: 1000,
                    action:[
            {
            text:'loan schemes',
            value:'loan'
          },
          {
              text:'Helpline number',
              value:'help'

          },
           {
              text:'FAQs',
              value:'faq'

          }
            ]

                });
            }) .then(res => {
                this.botui.message
                    .bot({
                        delay: 200,
                        loading: true
                    })
                    
                
                    .then(index => {
                        this.loadingIndex = index;

                        switch (res.value) {
                            case 'loan':
                                this.loan();
                                break;
                            case 'help':
                                this.help();
                                break;
                            case 'faq':
                                this.faq();
                                break;
                               
                            default:
                           
                        }
                    });
            });
      
    
        
           
    
    },
faq:function(){
this.botui.action.select({
  action: {
      placeholder : "Select your question", 
      //value: 'TR',
      searchselect : true, 
      label : 'text', 
      options : [
                      {value: "P", text : "How long will it take for my Personal loan to be processed?" },
                      {value: "Add", text : "How can I get my address changed in my loan account?" },
                      {value: "long", text : "How long can I take to repay my personal loan?" },
                      {value: "ten", text : "How long is the tenure of the loan (Education Loans For Indian Education)?" },
                      {value: "gold", text : "How should the gold loan be repaid?" },
                      {value: "hom", text : "what is the process to register my property?" },
                      {value: "homl", text : "what are the documents required to register new apartment or property?" },
                     
                ],
      button: {
        icon: 'check',
        label: 'OK'
      }
    },    
    delay: 10    
}).then(res => {
     this.input.name = res.value;
  if(this.input.name=="P"){
    this.botui.message.add({
      delay:1000,
      loading:true,
      content:"Once you submit your application form and the required documents as per Bank's criteria, you can expect our approval and disbursal in 4 hours*, provided everything is in order. All loan approvals are at the sole discretion of the bank."
    })
  }
  else if(this.input.name=="Add"){
    this.botui.message.add({
      delay:1000,
      loading:true,
      type:'html',
      content:"In order to change your address in our records, you may visit the nearest Retail Loan Service Center and submit the following documents:\
<li>Request form for Address Change.</li>\
<li>Self Attested copy of your revised address proof along with the original address proof for validation.</li>\
<li>In case a bearer submits the request on your behalf, a bearer authorisation along with KYC documents(self attested copy and original for validation) of the bearer, i.e. Identity and Signature Proof like PAN Card, Aadhar Card, Driving License or Passport Copy will also need to be provided.</li>"
    })
  }
  else if(this.input.name=="long"){
    this.botui.message.add({
      delay:1000,
      loading:true,
      type:'html',
      content:"We offer flexible repayment options ranging from 12 to 60 months, depending on the customer’s profile."
    })
  }
  else if(this.input.name=="ten"){
    this.botui.message.add({
      delay:1000,
      loading:true,
      type:'html',
      content:"The maximum repayment tenures are as below:\
<li>For loans upto Rs. 7.50 lacs - upto 10 years</li>\
<li>For loans above Rs. 7.50 lacs - upto 15 years</li>"
    })
  }
 else if(this.input.name=="gold"){
    this.botui.message.add({
      delay:1000,
      loading:true,
      type:'html',
      content:"The best thing about Loan against Gold is that only servicing of the interest is required.\
Monthly out flow as low as Rs 1000 per lakh calculated basis indicative rate of 12% p.a"
    })
  }
  else if(this.input.name=="hom"){
    this.botui.message.add({
      delay:1000,
      loading:true,
      type:'html',
      content:"Registration of a property includes necessary stamping and paying of registration charges for a sale deed and getting it recorded at the sub-registrar's office of the concerned jurisdictional area. If a property is purchased from a developer directly, getting it registered amounts to an act of legal conveyance. In case the purchased property is a second or third transaction, it involves a duly stamped and registered transfer deed. Nowadays, property registration process has been completely computerized in most states."
    })
  }
  else if(this.input.name=="homl"){
    this.botui.message.add({
      delay:1000,
      loading:true,
      type:'html',
      content:"Sale Deed, No Objection Certificate (NOC) from builder, NOC from banks, Building Plan approvals, Completion Certificate, PAN Card and photographs."
    })
  }
}).then(() => {
                return this.botui.action.button({
                  
                    delay: 1000,
                    action:[
            {
            text:'loan schemes',
            value:'loan'
          },
          {
              text:'Helpline number',
              value:'help'

          },
           {
              text:'FAQs',
              value:'faq'

          }
            ]

                });
            }) .then(res => {
                this.botui.message
                    .bot({
                        delay: 200,
                        loading: true
                    })
                    
                
                    .then(index => {
                        this.loadingIndex = index;

                        switch (res.value) {
                            case 'loan':
                                this.loan();
                                break;
                            case 'help':
                                this.help();
                                break;
                            case 'faq':
                                this.faq();
                                break;
                               
                            default:
                           
                        }
                    });
            });
      
    

},
  

    demo: function() {
        this.botui.message
            .bot({
               delay:1000,
  loading:true,
        content: 'Hi i am bankerbot.'
            })
            .then(() => {
                return this.botui.message.bot({
                    delay: 1000,
                    content: 'What\'s your name?'
                });
            })
            .then(() => {
                return this.botui.action.text({
                     delay: 400,
        action: {
          size: 18,
         
          sub_type: 'text',
          placeholder: 'type your name'
        }
                });
            })
            .then(res => {
              this.input.name = res.value;
                this.botui.message.add({
                 
                    content: 'Hi ' + this.input.name
                });
            })
            .then(() => {
                return this.botui.message.bot({
                   delay:1000,
  loading:true,
        content: 'choose above one option to continue'
                });
            })
           
            .then(() => {
                return this.botui.action.button({
                  
                    delay: 1000,
                    action:[
            {
            text:'loan schemes',
            value:'loan'
          },
          {
              text:'Helpline number',
              value:'help'

          },
           {
              text:'FAQs',
              value:'faq'

          }
            ]

                });
            })
            .then(res => {
                this.botui.message
                    .bot({
                        delay: 200,
                        loading: true
                    })
                    
                
                    .then(index => {
                        this.loadingIndex = index;

                        switch (res.value) {
                            case 'loan':
                                this.loan();
                                break;
                            case 'help':
                                this.help();
                                break;
                            case 'faq':
                                this.faq();
                                break;
                               
                            default:
                           
                        }
                    });
            });
      
    }
};


chitchat.init();

    </script>
    <style type="text/css">
      body {
 background: -moz-linear-gradient(45deg, #0E3853 0%, #343E9D 55%, #43C9BB 100%);
background: -webkit-linear-gradient(45deg, #0E3853 0%, #343E9D 55%, #43C9BB 100%);
background: linear-gradient(45deg, #0E3853 0%, #343E9D 55%, #43C9BB 100%);
  position: relative;
    width: 100vw;
    height: 100vh;
}

#botui-app{
    position: absolute;
    display: flex;
  top: 10%;

    right: 0px;
    left: 0px;
    align-items: center;
    justify-content: center;

}

@import url("https://fonts.googleapis.com/css?family=Open+Sans");

$font-family: "Open Sans", sans-serif;
$primary-color: black;

.botui-container {

    font-size: 14px;
    background-color: #fd5c63;
    font-family: $font-family;
}

.botui-messages-container {
    padding: 10px 20px;
}

.botui-actions-container {
    padding: 10px 20px;
}

.botui-message {
    min-height: 30px;
}

.botui-message-content {
    padding: 7px 13px;
    border-radius: 15px;
    color: darken($primary-color, 22%);
    background-color: lighten($primary-color, 35%);

    &.human {
  
        color: black;
        background-color: #405de6;
    }

    &.text {
        line-height: 1.3;
    }
    &.loading {
        background-color: rgba(206, 206, 206, 0.5);
        line-height: 1.3;
        text-align: center;
    }
    &.embed {
        padding: 5px;
        border-radius: 5px;
    }
}

.botui-message-content-link {
    color: $primary-color;
}

.botui-actions-text-input {
    border: 0;
    outline: none;
    border-radius: 0;
    padding: 5px 7px;
    font-family: $font-family;
    background-color: transparent;
    color: #000;
    border-bottom: 1px solid #fff;
    &::-webkit-input-placeholder {
        color: black;
    }
}


.botui-actions-buttons-button {
    border: 0;
    color: #fff;
    line-height: 1;
    cursor: pointer;
    font-size: 14px;
    font-weight: 500;
    padding: 7px 15px;
    border-radius: 4px;
    font-family: $font-family;
    background: #405de6;
    box-shadow: 2px 3px 4px 0 rgba(0, 0, 0, 0.25);
}


.slide-fade-enter-active {
    transition: all 0.3s ease;
}

.slide-fade-enter,
.slide-fade-leave-to {
    opacity: 0;
    transform: translateX(-10px);
}


.dot {
    width: 0.5rem;
    height: 0.5rem;
    border-radius: 0.5rem;
    display: inline-block;
    background-color: $primary-color;
    &:nth-last-child(1) {
        margin-left: 0.3rem;
        animation: loading 0.6s 0.3s linear infinite;
    }
    &:nth-last-child(2) {
        margin-left: 0.3rem;
        animation: loading 0.6s 0.2s linear infinite;
    }
    &:nth-last-child(3) {
        animation: loading 0.6s 0.1s linear infinite;
    }
}

@keyframes loading {
    0% {
        transform: translate(0, 0);
        background-color: lighten($primary-color, 10%);
    }

    25% {
        transform: translate(0, -3px);
    }
    50% {
        transform: translate(0, 0px);
        background-color: lighten($primary-color, 10%);
    }
    75% {
        transform: translate(0, 3px);
    }
    100% {
        transform: translate(0, 0px);
    }
}

    </style>
</body>
</html>