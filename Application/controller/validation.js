
function msg()
{
    let id = document.getElementById('id').value;
    //let password = document.getElementById('password').value;

    let l = id.length;
    //let p = password.length;

    

    /* if(p<4)
    {
        document.getElementById('pem').innerHTML = '<div id="warning">Password length is too short<div>';
    }
    
    else document.getElementById('pem').innerHTML = ''; */

    if(l<4)
    {
        document.getElementById('emsg').innerHTML = 'id length is too short';
    }
    
    else document.getElementById('emsg').innerHTML = '';


}




function listSearch()
{

                let id = document.getElementById('id').value;
                let xhttp = new XMLHttpRequest();
                xhttp.open('post', 'searchResult.php', true);
                //xhttp.open('POST', 'userCheck.php', true);
                xhttp.onreadystatechange = function(){

                    if(this.readyState == 4 && this.status == 200){
                        //document.getElementById('head').innerHTML = this.responseText;
                        document.getElementById('msg').innerHTML = this.responseText;
                    }             
                }
                
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");     
                xhttp.send('id='+id);

}

function recover()
{

                let id = document.getElementById('input').value;
                let xhttp = new XMLHttpRequest();
                xhttp.open('GET', 'test.php?id='+id, true);
                //xhttp.open('POST', 'test.php', true);
                xhttp.onreadystatechange = function(){

                    if(this.readyState == 4 && this.status == 200){
                        //document.getElementById('head').innerHTML = this.responseText;
                        //document.getElementById('test').innerHTML = this.responseText;
                        
                    }             
                }
                
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");     
                xhttp.send('id='+id);

                

}

