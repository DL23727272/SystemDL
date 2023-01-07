function calculateDays(){
    var d1 = document.getElementById("check-in-Date").value;
    var d2 = document.getElementById("check-out-Date").value;

    const dateOne = new Date(d1);
    const dateTwo = new Date(d2);

    const time = Math.abs(dateTwo - dateOne);
    const days = Math.ceil(time / (1000 * 3600 * 24));
    document.getElementById("stay").innerHTML = days;
    document.getElementById("stay2").innerHTML = days;
    document.getElementById("stay3").innerHTML = days;
    document.getElementById("check_in").innerHTML = d1;
} 

    //function for inputs to display
   function forName(content){
       const element = document.querySelector('#name-result');
       element.innerHTML = `Reserved for: ${content}`;
   }

   function forContact(content){
       const element = document.querySelector('#contact-result');
       element.innerHTML = `Contact No.: ${content}`;
   }


   function forChkD(content){
       const element = document.querySelector('#checkinD-result');
       element.innerHTML = `Check-in Date: ${content}`;
   }


   function forChkT(content){
       const element = document.querySelector('#checkinT-result');
       element.innerHTML = `Check-in Time: ${content}`;
   }

   function forStay(content){
    const element = document.querySelector('#stay-result');
    if(content <= 1){
        element.innerHTML = `Days of Stay: ${content} day`;
    }else{
        element.innerHTML = `Days of Stay: ${content} days`;
    }
}

//function for computation
function forprice(classType, daysOfStay, message){
    document.querySelector('#price-display').innerHTML = classType * daysOfStay + message;
}

   //each save buttons
   const twin = document.getElementById('twin-save');
   const deluxe = document.getElementById('deluxe-save');
   const superDeluxe = document.getElementById('superdeluxe-save');
   
   //action for twin
   twin.addEventListener('click', (e) => {
    
    //values in twin modal
    let names = document.getElementById('name1').value;
    let contact = document.getElementById('contact1').value;
    let chkd = document.getElementById('chkd').value;
    let chkt = document.getElementById('chkt').value;
    const days = document.getElementById('stay1');

    document.querySelector('#note').innerHTML = 'Your reservation is being processed. Thank you dear costumer'

    //display section
    forName(names);
    forContact(contact);
    forChkD(chkd);
    forChkT(chkt);
    forStay(days.value)

    forprice(5000, parseInt(days.value), ' pesos for Twin Bed Room');
   });

    //action for deluxe
    deluxe.addEventListener('click', (e) => {
        
        //values in deluxe modal
        let names = document.getElementById('name2').value;
        let contact = document.getElementById('contact2').value;
        let chkd = document.getElementById('chkd').value;
        let chkt = document.getElementById('chkt').value;
        const days = document.getElementById('stay2');
    
        document.querySelector('#note').innerHTML = 'Your reservation is being processed. Thank you dear costumer'
    
        //display section
        forName(names);
        forContact(contact);
        forChkD(chkd);
        forChkT(chkt);
        forStay(days.value)
    
        forprice(10000, parseInt(days.value), ' pesos for Deluxe Bed Room');
       });

    //action for superDeluxe
    superDeluxe.addEventListener('click', (e) => {
       
        //values in superdeluxe modal
        let names = document.getElementById('name3').value;
        let contact = document.getElementById('contact3').value;
        let chkd = document.getElementById('chkd').value;
        let chkt = document.getElementById('chkt').value;
        const days = document.getElementById('stay3');

        document.querySelector('#note').innerHTML = 'Your reservation is being processed. Thank you dear costumer'

        //display section
        forName(names);
        forContact(contact);
        forChkD(chkd);
        forChkT(chkt);
        forStay(days.value)

        forprice(20000, parseInt(days.value), ' pesos for Super Deluxe Bed Room');
   });
