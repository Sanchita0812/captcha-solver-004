document.addEventListener('DOMContentLoaded', () => {
    const submitButton = document.getElementById('submitButton');
    const captchaInput = document.getElementById('captchaInput');
    const resultElement = document.getElementById('result');
    const captchaImage = document.getElementById('captchaImage');

    submitButton.addEventListener('click', async () => {
        const userInput = captchaInput.value;

        const response = await fetch('verify_captcha.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `captcha=${userInput}`,
        });

        const data = await response.json();

        if (data.success) {
            resultElement.textContent = 'Captcha Matched!';
            captchaInput.value = '';
            captchaImage.src = 'generate_captcha.php?' + new Date().getTime(); // Refresh image
        } else {
            resultElement.textContent = 'Captcha Failed. Try again.';
            captchaInput.value = '';
            captchaImage.src = 'generate_captcha.php?' + new Date().getTime(); // Refresh image
        }
    });
});