function add() {
    let array1 = [1,2,3,4,5,6,7,8,9,10];
    let array2 = [1,2,3,4,5,6,7,8,9,10];
    let array3 = [];
    

    for (let index = 0; index < array1.length; index++) {
        array3[index] = array1[index]+array2[index]; 
        console.log(array3[index]);
    }
    document.getElementById("add").innerHTML="Added Array Elements : <br/>";
    for (let index = 0; index < array1.length; index++) {
        document.getElementById("add").innerHTML += array3[index]+", ";
    }
}

function mul(){
    let array1 = [1,2,3,4,5,6,7,8,9,10];
    let array2 = [1,2,3,4,5,6,7,8,9,10];
    let array4 = [];

    for (let index = 0; index < array1.length; index++) {
        array4[index] = array1[index]*array2[index]; console.log(array4[index]);
        console.log(array4[index]);
    }
    document.getElementById("mul").innerHTML="Mulitplied Array Elements : <br/>";
    for (let index = 0; index < array1.length; index++) {
        document.getElementById("mul").innerHTML += array4[index]+", ";
    }
}