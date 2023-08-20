<?php 
$name = 'Sagar';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #light{
            height:100px;
            width:100px;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <h1>Our First JavaScript class</h1>

    <button onclick="lightOn()">lightOn</button>
    <button onclick="javascript:lightOff();">lightOn</button>


    <div id="light"></div>


    <script src="./app.js"></script>
    <script>
        // var x = 2;
        /* 
        let y = 5;
        y = 20
        const CAPITAL = 'Dhaka'
        */

        // CAPITAL = 'Bandarban';

        // console.log(x+y)

        // document.write('Hello World');
        // document.write('Hello JaavScript');
        // alert('Hello Bangladesh')

        let x = 2;
        let y = '3';

        let name = 'Nadim';
        let intro = `<h3>My name is <mark>${name}</mark></h3>`;

        let stdData = `
                <table>
                    <tr>
                        <th>Roll</th>
                        <th>Name</th>
                        <th>Class</th>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>${name}</td>
                        <td>One</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td><?=$name?></td>
                        <td>One</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Tina</td>
                        <td>Two</td>
                    </tr>
                </table>
            `;

        console.log(intro);
        document.write(stdData);
        let city;
        // city = 103;
        // hello
        console.log(city)


        // function logence(...name)
        // {
        //     console.log(name)
        //     // alert(name+' খুব মিষ্টি...')
        // }

        // anonymous / closure
        const logence = function(...name){
            console.log(name);
        }
        

        // arrow function
        const logence2 = (name,name2)=>{
            console.log(name,name2)
        }

        logence('alpenliebe', 'Mr Mango', 'নাবিস্কো', 'coffee', 'ললিপপ');



        function lightOn()
        {
            document.getElementById('light')
            console.log('light is on');
        }
        function lightOff()
        {
            console.log('light is off');
        }



        const fruits = ['Apple', 'Banana', 'Cherry'];
        fruits['first'] = 'আম';
        // console.log(fruits);


        const numbers = [1,3,5,9,8,2,3,4,15,503,100,50,120,210];
        // n>=100 && n<=200

        const filterEven= (n)=>n%2==0;
        const filterOdd = (n)=>n%2==1;

        let allEvenNumbers = numbers.filter(filterEven);
        let allOddNumbers = numbers.filter(filterOdd);
        console.log(allEvenNumbers, allOddNumbers);



        const car = {
            brand : 'TOYOTA',
            model : 'AXIO',
            release: 2010,
            reg : 'DHK-M-1234',

            move: run
        };

        let org ;
        let prop;
        if(org == 'BRTC')
            prop = 'reg';
        else if(org=='Uber')
            prop = 'model';
        else
            prop = 'brand'

        console.log(car.brand);



        function run(){
            console.log('boooo....')
        }
    </script>
    
</body>
</html>