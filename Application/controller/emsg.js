let flag; let i=0; let file_url;

function checkId()
{
    let id = document.getElementById('id').value;
    let l = (id.trim()).length;  
    

    if(l == '')
        {
            document.getElementById('emsg').innerHTML='Please fill this'; flag = false;
        }

    else if(!(l==5))
            {
                document.getElementById('emsg').innerHTML='ID must be 5 character(XXXXX)'; flag = false;
            }

    else if(isNaN(id))
        {
            document.getElementById('emsg').innerHTML='ID can only contain numeric input'; flag = false;
        }
/* 
    else if(!(countWords(id)==1))
        {
            document.getElementById('emsg').innerHTML='ID format should be XXXXX'; flag = false;
        }
 */
    else {
        document.getElementById('emsg').innerHTML=''; 
        flag = true; i+=1;}

}

function checkCode()
{
    let code = document.getElementById('code').value;
    let l = (code.trim()).length;  
    

    if(l == '')
        {
            document.getElementById('emsg_code').innerHTML='Please fill this'; flag = false;
        }

    else if(!(l==4))
            {
                document.getElementById('emsg_code').innerHTML='Code must be 4 character'; flag = false;
            }

    else if(isNaN(code))
        {
            document.getElementById('emsg_code').innerHTML='Code can only contain numeric input'; flag = false;
        }

    else {
        document.getElementById('emsg_code').innerHTML=''; 
        flag = true; i+=1;}

}

function checkNumber()
{
    let num = document.getElementById('number').value;
    let l = (num.trim()).length;  
    

    if(l == '')
        {
            document.getElementById('emsg_number').innerHTML='Please fill this(Numeric Value)'; flag = false;
        }

    else if(isNaN(num))
        {
            document.getElementById('emsg_number').innerHTML='Credit can only contain numeric value'; flag = false;
        }

    else {
        document.getElementById('emsg_number').innerHTML=''; 
        flag = true; i+=1;}

}

function checkName()
{
    let name = document.getElementById('name').value;
    let l = name.length;
    flag = false;
    if(l == '')
        {
            document.getElementById('emsg_name').innerHTML='Please fill this'; flag = false;
        }

    else if(countWords(name)<2)
            {
                document.getElementById('emsg_name').innerHTML='Name Should have at least two word'; flag = false;
            }

    else if(containsNumber(name))
        {
            document.getElementById('emsg_name').innerHTML='Name should not contain any numeric value'; flag = false;
        }

    else {document.getElementById('emsg_name').innerHTML=''; flag = true; i+=1;}


}

function check_notice_Title()
{
    let name = document.getElementById('title').value;
    let l = name.length;
    flag = false;
    if(l == '')
        {
            document.getElementById('emsg_title').innerHTML='Please fill this'; flag = false;
        }

    else if(countWords(name)<2)
            {
                document.getElementById('emsg_title').innerHTML='Title Should have at least two word'; flag = false;
            }



    else {document.getElementById('emsg_title').innerHTML=''; flag = true; i+=1;}


}

function checkMail()
{
    let mail = document.getElementById('mail').value;
    flag = false;
    

    if(mail == '')
        {
            document.getElementById('emsg_mail').innerHTML='Please fill this'; flag = false;
        }

    else if(!validateEmail(mail))
            {
                document.getElementById('emsg_mail').innerHTML='Invalid Mail address'; flag = false;
            }

    else {document.getElementById('emsg_mail').innerHTML=''; flag = true; i+=1;}


}

function checkTitle()
{
    let title = document.getElementById('jobtitle').value;

    if(title == '')
        {
            document.getElementById('emsg_title').innerHTML='Please fill this'; flag = false;
        }

    else if(containsNumber(title))
            {
                document.getElementById('emsg_title').innerHTML='Can not Conatin any number'; flag = false;
            }

    else {document.getElementById('emsg_title').innerHTML=''; flag = true; i+=1;}

}

function checkDept()
{
    let dept = document.getElementById('dept').value;

    if(dept == '')
        {
            document.getElementById('emsg_dept').innerHTML='Please Select a Department from given option'; flag = false;
        }
    else {document.getElementById('emsg_dept').innerHTML=''; flag = true; i+=1;}

}

function checkAddress()
{
    let address = document.getElementById('address').value;

    if(address == '')
        {
            document.getElementById('emsg_address').innerHTML='Please provide an address'; flag = false;
        }
    else {document.getElementById('emsg_address').innerHTML=''; flag = true; i+=1;}

}

function checkDescription()
{
    let d = document.getElementById('description').value;

    if(d == '')
        {
            document.getElementById('emsg_description').innerHTML='Please provide description'; flag = false;
        }
    else {document.getElementById('emsg_description').innerHTML=''; flag = true; i+=1;}

}

function checkDOB()
{
    let dob = document.getElementById('dob').value;

    if(dob == '')
        {
            document.getElementById('emsg_dob').innerHTML='Please select the Birth Date'; flag = false;
        }
    else {document.getElementById('emsg_dob').innerHTML=''; flag = true; i+=1;}

}

function checkJoin()
{
    let join = document.getElementById('join').value;

    if(join == '')
        {
            document.getElementById('emsg_join').innerHTML='Select the Joining Date'; flag = false;
        }
    else {document.getElementById('emsg_join').innerHTML=''; flag = true; i+=1;}

}

function checkDate()
{
    let date = document.getElementById('date').value;

    if(date == '')
        {
            document.getElementById('emsg_date').innerHTML='Select the Date'; flag = false;
        }
    else {document.getElementById('emsg_date').innerHTML=''; flag = true; i+=1;}

}


function checkPass()
{
    let pass = document.getElementById('password').value;
    let l = (pass.trim()).length;

    if(l == '')
        {
            document.getElementById('emsg_pass').innerHTML='Fill this password filed'; flag = false;
        }
    else {document.getElementById('emsg_pass').innerHTML=''; flag = true; i+=1;}

}

function checkcpass()
{
    let pass = document.getElementById('password').value;
    let cpass = document.getElementById('cpassword').value;
    let l = (cpass.trim()).length;

    if(l == '')
        {
            document.getElementById('emsg_cpass').innerHTML='Fill this Confirm password filed'; flag = false;
        }
    else if(pass.trim() != cpass.trim())
        {
            document.getElementById('emsg_cpass').innerHTML='Confirm Password should match Password'; flag = false;
        }
    
        else {document.getElementById('emsg_cpass').innerHTML=''; flag = true; i+=1;}

}

function checkFile()
{
    let file = document.getElementById('file').value;
    

    if(file == '')
        {
            //ocument.getElementById('emsg_file').innerHTML='Choose a File'; flag = false;
            document.getElementById('submit').hidden=true;
            document.getElementById('previewImage').setAttribute('src', '');


            
        }
    else {
        //document.getElementById('emsg_file').innerHTML=''; flag = true; i+=1;

        //view image after the change
        let impfile = document.getElementById('file');  
        let fileobj = impfile.files[0];
        const reader = new FileReader();
        reader.addEventListener("load", function(){
            file_url = this.result;
            document.getElementById('previewImage').setAttribute('src', file_url);
        });
        reader.readAsDataURL(fileobj);
        document.getElementById('submit').hidden=false;

         
        
    }

}

function checkForm()
{
    let file = document.getElementById('file').value;
    

    if(file == '')
        {
            //ocument.getElementById('emsg_file').innerHTML='Choose a File'; flag = false;
            document.getElementById('submit').hidden=true;

            
        }
    else {
        document.getElementById('submit').hidden=false;        
    }

}


function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }

function countWords(str) {
    return str.trim().split(/\s+/).length;
  }

function containsNumber(str) {
    return /\d/.test(str);
  }



function add()
{
    
    i=0;
    checkId(); checkName(); checkMail(); checkTitle(); checkDept(); 
    checkAddress(); checkDOB();  checkJoin(); 

    if(i==8)
    {
        let id = document.getElementById('id').value;
        let name = document.getElementById('name').value;
        let mail = document.getElementById('mail').value;
        let title = document.getElementById('jobtitle').value;
        let dept = document.getElementById('dept').value;
        let address = document.getElementById('address').value;
        let dob = document.getElementById('dob').value;
        let gender = document.querySelector('input[name="gender"]:checked').value;
        let join_date = document.getElementById('join').value;
        
        //form id
        

        let user = {'id': id, 'name': name, 'mail': mail, 'title': title, 'dept': dept, 
        'address': address, 'dob': dob, 'gender':gender, 'join_date': join_date};
        let json = JSON.stringify(user);
        //console.log(json);
        

        let xhttp = new XMLHttpRequest();
                //xhttp.open('GET', 'test.php?id='+id, true);
                xhttp.open('POST', 'faculty.php', true);
                //xhttp.open('POST', 'test.php', true);
                xhttp.onreadystatechange = function(){

                    if(this.readyState == 4 && this.status == 200){
                        if(this.responseText)
                        {
                            document.getElementById('found').innerHTML = 'Faculty Registered'; 
                            document.getElementById('form').reset();

                        }

                        else document.getElementById('not_found').innerHTML = 'Failed';
                        
                    }             
                }
                
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");     
                xhttp.send('data='+json);
    }

    
}

function addStd()
{
    
    i=0;
    checkId(); checkName(); checkDOB(); checkDept();checkAddress();  checkJoin(); 

    if(i==6)
    {
        let id = document.getElementById('id').value;
        let name = document.getElementById('name').value;
        let dob = document.getElementById('dob').value;
        let dept = document.getElementById('dept').value;
        let address = document.getElementById('address').value;
        let gender = document.querySelector('input[name="gender"]:checked').value;
        let join_date = document.getElementById('join').value;
        let graduation = document.getElementById('date').value;
        
        //form id
        

        let user = {'id': id, 'name': name, 'dept': dept, 'address': address, 'dob': dob, 'gender':gender, 'join_date': join_date, 'graduation': graduation};
        let json = JSON.stringify(user);
        //console.log(json);
        

        let xhttp = new XMLHttpRequest();
                //xhttp.open('GET', 'test.php?id='+id, true);
                xhttp.open('POST', 'addStd.php', true);
                //xhttp.open('POST', 'test.php', true);
                xhttp.onreadystatechange = function(){

                    if(this.readyState == 4 && this.status == 200){
                        if(this.responseText)
                        {
                            document.getElementById('found').innerHTML = 'Student Registered'; 
                            document.getElementById('form').reset();

                        }

                        else document.getElementById('not_found').innerHTML = 'Failed';
                        //console.log(this.responseText);
                        
                    }             
                }
                
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");     
                xhttp.send('data='+json);
    }

    
}

function addCourse()
{
    
    i=0;
    checkCode(); checkName(); checkDept();checkDescription();  checkNumber(); 

    if(i==5)
    {
        let code = document.getElementById('code').value;
        let name = document.getElementById('name').value;
        let dept = document.getElementById('dept').value;
        let description = document.getElementById('description').value;
        let credit = document.getElementById('number').value;
        
        //form id
        

        let user = {'code': code, 'name': name, 'dept': dept, 'description': description, 'credit': credit};
        let json = JSON.stringify(user);
        //console.log(json);
        

        let xhttp = new XMLHttpRequest();
                //xhttp.open('GET', 'test.php?id='+id, true);
                xhttp.open('POST', 'course.php', true);
                //xhttp.open('POST', 'test.php', true);
                xhttp.onreadystatechange = function(){

                    if(this.readyState == 4 && this.status == 200){
                        if(this.responseText)
                        {
                            document.getElementById('found').innerHTML = 'Course Registered'; 
                            document.getElementById('form').reset();

                        }

                        else document.getElementById('not_found').innerHTML = 'Failed';
                        //console.log(this.responseText);
                        
                    }             
                }
                
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");     
                xhttp.send('data='+json);
    }

    
}

function addNotice()
{
    
    i=0;
    check_notice_Title(); checkDescription();  checkDate(); 

    if(i==3)
    {
        let name = document.getElementById('title').value;
        let description = document.getElementById('description').value;
        let date = document.getElementById('date').value;
        
        //form id
        

        let user = {'name': name, 'description': description, 'date': date};
        let json = JSON.stringify(user);
        console.log(json);
        

        let xhttp = new XMLHttpRequest();
                //xhttp.open('GET', 'test.php?id='+id, true);
                xhttp.open('POST', 'notice.php', true);
                //xhttp.open('POST', 'test.php', true);
                xhttp.onreadystatechange = function(){

                    if(this.readyState == 4 && this.status == 200){
                        if(this.responseText)
                        {
                            document.getElementById('found').innerHTML = 'Notice Published'; 
                            document.getElementById('form').reset();

                        }

                        else document.getElementById('not_found').innerHTML = 'Failed';
                         //console.log(this.responseText);
                        
                    }             
                }
                
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");     
                xhttp.send('data='+json); 
    }

    
}


function login()
{
    i=0; checkId(); checkPass();

    if(i==2)
    {
        let id = document.getElementById('id').value;
        let password = document.getElementById('password').value;
        //console.log(id);
        //console.log(password);
        
        let user = {'id': id, 'password': password};
        let json = JSON.stringify(user);

        let xhttp = new XMLHttpRequest();
        xhttp.open('POST', '../controller/loginCheck.php', true);
        xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
                
                if(this.responseText == true)
                {
                    window.location='../view/home.php';
                }

                else document.getElementById('emsg_login').innerHTML = 'Invalid Credentials';
            } 
            
            //else alert('Invalid Credentials');
        }         
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");     
        xhttp.send('data='+json);
    }
}

function recover()
{
    
    document.getElementById('found').innerHTML = '';
    document.getElementById('not_found').innerHTML = '';

    i=0; checkId();
    if(i==1)
    {
        let id = document.getElementById('id').value;
        let xhttp = new XMLHttpRequest();
        xhttp.open('POST', 'accRecover.php', true);
        //xhttp.open('POST', 'test.php', true);
        xhttp.onreadystatechange = function(){

            if(this.readyState == 4 && this.status == 200){
                
                    if(this.responseText)
                        {
                            //console.log(this.responseText);
                            let h = this.responseText.trim();
                            //console.log(h);
                            if(h)
                            {
                                document.getElementById('found').innerHTML = 'Your Password:'+this.responseText; 
                                document.getElementById('form').reset();
                            }

                            else document.getElementById('not_found').innerHTML = 'Not Found';


                        }

                        else document.getElementById('not_found').innerHTML = 'Not Found';
                //console.log(this.responseText);
            } 
            
            //else alert('Invalid Credentials');
        }
        
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");     
        xhttp.send('id='+id);
}
}


function register()
{
    i=0;
    checkId(); checkName(); checkMail(); checkPass(); checkcpass();
    
    if(i==5)
    {
        let id = document.getElementById('id').value;
        let name = document.getElementById('name').value;
        let mail = document.getElementById('mail').value;
        let pass = document.getElementById('password').value;
        let gender = document.querySelector('input[name="gender"]:checked').value;

        let user = {'id': id, 'name': name, 'mail': mail, 'gender':gender, 'pass': pass};
        let json = JSON.stringify(user);
        //console.log(json);
        

        let xhttp = new XMLHttpRequest();
                //xhttp.open('GET', 'test.php?id='+id, true);
                xhttp.open('POST', 'registration.php', true);
                //xhttp.open('POST', 'test.php', true);
                xhttp.onreadystatechange = function(){

                    if(this.readyState == 4 && this.status == 200){
                        if(this.responseText == true)
                        {
                            document.getElementById('found').innerHTML = 'Admin Registered';
                            document.getElementById('form').reset();

                        }

                        else document.getElementById('not_found').innerHTML = 'Failed to register';
                        
                        //alert(this.responseText);
                        
                    }             
                }
                
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");     
                xhttp.send('data='+json);
    }  
 
    
}


function changeProfile()
{
    
    i=0;
    checkName(); checkMail(); checkPass(); 
    

    if(i==3)
    {
        let name = document.getElementById('name').value;
        let mail = document.getElementById('mail').value;
        let pass = document.getElementById('password').value;
        
        //form id
        

        let user = {'name': name, 'mail': mail, 'password': pass};
        let json = JSON.stringify(user);
        console.log(json);
        

        let xhttp = new XMLHttpRequest();
                //xhttp.open('GET', 'test.php?id='+id, true);
                xhttp.open('POST', 'userProfile.php', true);
                //xhttp.open('POST', 'test.php', true);
                xhttp.onreadystatechange = function(){

                    if(this.readyState == 4 && this.status == 200){
                        
                            window.location='../view/userProfile.php';
                            //document.getElementById('found').innerHTML = 'Information Changes Successfully';
                            //console.log(this.responseText);
                        

                        
                    }             
                }
                
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");     
                xhttp.send('data='+json);
    }

    
}




function home()
{
    window.location='../view/home.php';
}

function profile()
{
    window.location='../view/userProfile.php';
}

function student()
{
    window.location='../view/student.php';
}

function faculty()
{
    window.location='../view/faculty.php';
}

function course()
{
    window.location='../view/course.php';
}

function notice()
{
    window.location='../view/notice.php';
}









