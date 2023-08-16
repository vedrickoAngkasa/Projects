var student = [];

const press =  function(){
    document.getElementsByName('textStudent').onkeydown = Press();
}


 function Press(event) {
            
       
        var x = event.keyCode;
        var Input = "";
        
            if (x == 13) {

                var studentName = document.getElementById('studentName').value;
                student.push(studentName);

                for (let i = 0; i < student.length; i++) {
                    Input = Input + student[i] + "\n";
                }

                student.sort();
                document.getElementById('ans').innerHTML = Input;
            }
        }

window.onload = press;
