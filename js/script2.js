var alph = [];
var karaok = [];
var linkko = [];
var ik = 0;

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


function startKeyevent(){
    let backArr = alph.slice();
    let showArr = [];
    let i = 0;
    let timeSet1 = getTsec();
    let timeSet2 = 0;
    showArr = backArr.join(' ');
    document.getElementById('demo').style.color = 'black';
    document.getElementById('demo').innerHTML = 'Start from a';
    document.getElementById('demo2').innerHTML = showArr;
    document.getElementById('demo3').innerHTML = " ";
    document.addEventListener("keypress", function(event) {
        var keyAlph = event.key;
        //timeSet1 = getTsec();
        if(keyAlph === alph[i]){
            backArr.shift();
            showArr = backArr.join(' ');
            document.getElementById('demo').style.color = 'black';
            document.getElementById('demo').innerHTML = "Next is " + alph[i+1];
            document.getElementById('demo2').innerHTML = showArr;
            document.getElementById('demo3').innerHTML = keyAlph;
            i++;
            if(i === 1){
                timeSet1 = getTsec();
            }
            else if(i === 26){
                timeSet2 = getTsec();
                document.getElementById('demo').style.color = 'green';
                document.getElementById('demo').innerHTML = "Success";
                document.getElementById('demo3').innerHTML = `Spending Time: ${(timeSet2 - timeSet1)/1000}s`;
                timeSet1 = 0;
                timeSet2 = 0;
                i =0;
                backArr = alph.slice();
            }
        }
        else if(keyAlph === '?'){
            document.getElementById('demo').style.color = 'black';
            document.getElementById('demo').innerHTML = "Restart and Go";
            timeSet1 = 0;
            timeSet2 = 0;
            i=0;
            startKeyevent();
        } 
        else{
            event.preventDefault();
            document.getElementById('demo').innerHTML = "Wrong, this is " + alph[i];
            document.getElementById('demo').style.color = 'red';
            document.getElementById('demo3').innerHTML = keyAlph;
        }
    })
}

function getTsec(){
    let timeSec = new Date().getTime();
    return timeSec;
}

function inserturl(){
    //let inWords = document.getElementById("suburl").value;
    //let inWords2 = inWords.replace('', '');
    //karaok[ik] = document.getElementById("suburl").value.replace('https://www.youtube.com/watch?v=','');
    karaok[ik] = document.getElementById("suburl").value.slice(32,43);
    //linkko[ik] = karaok[ik].link(karaok[ik]);
    //document.getElementById('koDemo').innerHTML = linkko.join("</br>");
    if (ik >= 0){
        linkko[ik] = '<iframe width="400" height="200" src="https://www.youtube.com/embed/' + karaok[ik] +  '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
        document.getElementById('koDemo').innerHTML = linkko.join("</br>");
    }else{
        linkko = [];
        document.getElementById('koDemo').innerHTML = linkko.join("</br>");
    }
    console.log(karaok);
    ik ++;
}

function deleteurl(){
    let numk = document.getElementById("suburl").value;
    if (ik >= 0){
        karaok.shift();
        linkko.shift();
        document.getElementById('koDemo').innerHTML = linkko.join("</br>");
        ik --;
        if(ik < 0)
        ik = 0;
    }else{
        ik = 0
        karaok = [];
        linkko = [];
        document.getElementById('koDemo').innerHTML = " ";  
    }
}

// function inserturl(){
//     karaok[ik] = document.getElementById("suburl").value.replace('https://www.youtube.com/watch?v=','');
//     //linkko[ik] = karaok[ik].link(karaok[ik]);
//     //document.getElementById('koDemo').innerHTML = linkko.join("</br>");
//     if (ik === 0){
//         document.getElementById('koDemo').innerHTML = '<iframe width="400" height="156" src="https://www.youtube.com/embed/' + document.getElementById("suburl").value.replace('https://www.youtube.com/watch?v=','') +  '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
//         karaok[0] = '<iframe width="400" height="156" src="https://www.youtube.com/embed/' + document.getElementById("suburl").value.replace('https://www.youtube.com/watch?v=','');
//     }else{
//         document.getElementById('koDemo').innerHTML = karaok.join('" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><iframe width="400" height="156" src="https://www.youtube.com/embed/') + '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
//     }
//     console.log(karaok);
//     ik ++;
// }
