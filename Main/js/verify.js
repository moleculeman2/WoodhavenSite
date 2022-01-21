document.getElementById('pass1').addEventListener('keyup', checkPass);
document.getElementById('pass2').addEventListener('keyup', checkPass);


function checkPass(){
	let regexLength = /^.{8,}$/;
	let regexDigit = /(?=.*[\d])/;
	let pass1 = document.getElementById('pass1');
	let pass2 = document.getElementById('pass2');
	let submit = document.getElementById('submit');
	let mismatch = document.getElementById('mismatch');
	let length = document.getElementById('length');
	let digit = document.getElementById('digit');

	if ((pass1.value != pass2.value) || (!regexLength.test(pass1.value)) || (!regexDigit.test(pass1.value))){
		pass1.className = 'error1';
		pass2.className = 'error1';
		submit.disabled = true;
		submit.style.cursor = 'default';
		submit.style.backgroundColor = '#3d4743';
		submit.style.pointerEvents = 'none';
	}
	else{
		pass1.className = 'good';
		pass2.className = 'good';
		submit.disabled = false;
		submit.style.cursor = 'pointer';
		submit.style.backgroundColor = '#739c8d';	
		mismatch.innerHTML = '';
		submit.style.pointerEvents = 'auto';
	}
	
	if ((pass1.value != pass2.value)) mismatch.innerHTML = 'Both passwords must match';
	else mismatch.innerHTML = '';
	
	if (!regexLength.test(pass1.value)) length.innerHTML = 'Password must be longer than 8 characters';	
	else length.innerHTML = '';
	
	if (!regexDigit.test(pass1.value)) digit.innerHTML = 'Password must contain one number';	
	else digit.innerHTML = '';
}