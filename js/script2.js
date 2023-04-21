var alph = [];
alph[0] = 'a';
alph[1] = 'b';
alph[2] = 'c';
alph[3] = 'd';
alph[4] = 'e';
alph[5] = 'f';
alph[6] = 'g';
alph[7] = 'h';
alph[8] = 'i';
alph[9] = 'j';
alph[10] = 'k';
alph[11] = 'l';
alph[12] = 'm';
alph[13] = 'n';
alph[14] = 'o';
alph[15] = 'p';
alph[16] = 'q';
alph[17] = 'r';
alph[18] = 's';
alph[19] = 't';
alph[20] = 'u';
alph[21] = 'v';
alph[22] = 'w';
alph[23] = 'x';
alph[24] = 'y';
alph[25] = 'z';

//////////////////////
var flag_alph = 0;
var i = 0;
var timeSet1 = 0;
var timeSet2 = 0;
var totalseconds = 0;

function start(){
    document.getElementById('demo').innerHTML = "GO";
    startKeyevent();
}

function startKeyevent(){
    let timeSec = new Date().getTime();
    document.addEventListener("keypress", function(event) {
        var keyAlph = event.key;
        if(keyAlph === alph[i]){
            timeSet1 = timeSec;
            document.getElementById('demo').style.color = 'black';
            document.getElementById('demo').innerHTML = alph[i];
            document.getElementById('demo2').innerHTML = keyAlph;
            
            if(i === 25){
                timeSec = new Date().getTime();
                document.getElementById('demo').style.color = 'green';
                document.getElementById('demo').innerHTML = "Success";
                timeSet2 = timeSec;
                document.getElementById('demo2').innerHTML = `Spending Time: ${(timeSet2-timeSet1)/1000}s`;
                i = -1;
                timeSet1 = 0;
                timeSet2 = 0;
            }
            i++;
        }
        else if(keyAlph === '?'){
            document.getElementById('demo').style.color = 'black';
            document.getElementById('demo').innerHTML = "Restart and Go";
        } 
        else{
            event.preventDefault();
            document.getElementById('demo').innerHTML = "NG " + alph[i];
            document.getElementById('demo').style.color = 'red';
            document.getElementById('demo2').innerHTML = keyAlph;
        }
    })
}