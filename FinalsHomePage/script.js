const username = document.getElementById('username')
const password = document.getElementById('password')
const cpassword = document.getElementById('cpassword')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  if(username.value.length < 6)
    {
        messages.push('Username must be greater than 6 characters')
    }

  if (password.value.length < 6) {
    messages.push('Password must be greater than 6 characters')
  }

  if (password.value !== cpassword.value) {
    messages.push('Passwords do not match')
    messages.push(password)
    messages.push(cpassword)
  }


  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})