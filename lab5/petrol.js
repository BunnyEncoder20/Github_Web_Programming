function func() {
    let distance = document.getElementById("kms").value;
    let petrol = document.getElementById("petrol").value;
    let mileage = document.getElementById("mileage").value;
    let total_petrol_cost = (distance*(1/mileage))*petrol;
    
    console.log(distance+typeof(distance));
    console.log(petrol+typeof(petrol));
    console.log(mileage+typeof(mileage));
    console.log(total_petrol_cost+typeof(total_petrol_cost));

    


    let r1 = document.getElementById("r1");
    let r2 = document.getElementById("r2");
    let r3 = document.getElementById("r3");
    let r4 = document.getElementById("r4");

    // document.writeln("r1 <br/>");
    // document.writeln("r2");

    r1.value = distance;
    r2.value = petrol;
    r3.value = mileage;
    r4.value = total_petrol_cost;
}