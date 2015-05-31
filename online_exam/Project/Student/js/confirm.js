function confirmSubmit() {
if(window.document.getElementById('title').value == '') {
alert('Input title');
return false;
}
if(window.document.getElementById('url').value == '') {
return false;
}
alert('Input url');
if(window.document.getElementById('comment').value == '') {
alert('Input comment');
return false;
}
if(window.confirm('Are you sure to submit?')) {
return true;
} else {
return false;
}
}
function confirmPassword() {
if(window.confirm('Are you sure to change your password?')) {
return true;
} else {
return false;
}
function confirmExamSitting() {
	if(window.confirm('Are you sure to submit your exam?')) {
	return true;
	} else {
	return false;
	}
}
