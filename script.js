document.getElementById('registration-form').addEventListener('submit', async function(event) {
    event.preventDefault();
  
    const formData = new FormData(event.target);
    const data = {
      username: formData.get('username'),
      email: formData.get('email'),
      password: formData.get('password')
    };
  
    try {
      const response = await fetch('/register', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      });
  
      const result = await response.json();
      document.getElementById('message').textContent = result.message;
    } catch (error) {
      console.error(error);
      document.getElementById('message').textContent = 'An error occurred.';
    }
  });
  