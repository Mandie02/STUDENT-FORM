

const input = document.querySelectorAll(".inp");
const submit_btn = document.getElementById('submitBtn');
const resetBtn = document.getElementById('resetBtn');

submit_btn.onclick = () => {
    const student_id = document.getElementById('studentID');
    const student_name = document.getElementById('student_name');
    const grade = document.getElementById('grade');
    const address = document.getElementById('address');
    const contact = document.getElementById('contact');


    if(student_id.value === ""){
        student_id.style.border = '2px solid';
        student_id.style.borderColor = 'red';
    }

    if(student_name.value === ""){
        student_name.style.border = '2px solid';
        student_name.style.borderColor = 'red';
        console.log('it work')
    }
    if(grade.value === ""){
        grade.style.border = '2px solid';
        grade.style.borderColor = 'red'
    }
    if(address.valie === ""){
        address.style.border = '2px solid';
        address.style.borderColor = 'red';
    }
    if(contact.value === ""){
        contact.style.border = '2px solid';
        contact.style.borderColor = 'red';
    }
}

resetBtn.onclick = () => {
    const student_id = document.getElementById('studentID');

    student_id.style.border = 'none';
    student_id.style.borderColor = '';

    student_name.style.border = 'none';
    student_name.style.borderColor = '';

    grade.style.border = 'none';
    grade.style.borderColor = '';

    address.style.border = 'none';
    address.style.borderColor = '';

    contact.style.border = 'none';
    contact.style.borderColor = '';
}


