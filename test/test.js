// JavaScript for the wheel functionality
const wheel = document.querySelector('.wheel');
const spinBtn = document.querySelector('.spin-btn');

let rotateAngle = 0; // initial rotate angle value
let spinning = false; // flag to prevent multiple spins

// Event listener for spin button
spinBtn.addEventListener('click', () => {
  if (!spinning) {
    spinning = true;
    // Randomly select a prize
    const randomAngle = Math.floor(Math.random() * 360) + 1440; // Spin at least 4 rounds (1440 degrees)
    rotateAngle += randomAngle;
    wheel.style.transform = `rotate(${rotateAngle}deg)`;
    setTimeout(() => {
      spinning = false;
      // Determine the selected prize based on the final rotation angle
      const selectedSegment = Math.floor((rotateAngle % 360) / (360 / 6));
      switch (selectedSegment) {
        case 0:
          alert('Congratulations! You won Prize 1!');
          break;
        case 1:
          alert('Congratulations! You won Prize 2!');
          break;
        case 2:
          alert('Congratulations! You won Prize 3!');
          break;
        case 3:
          alert('Congratulations! You won Prize 4!');
          break;
        case 4:
          alert('Congratulations! You won Prize 5!');
          break;
        case 5:
          alert('Congratulations! You won Prize 6!');
          break;
        default:
          alert('Oops! Something went wrong. Please try again.');
          break;
      }
    }, 3000); // 3 seconds to simulate wheel spinning
  }
});
