document.addEventListener('DOMContentLoaded', () => {
    console.log('modal.js loaded'); // Debugging: Confirm script is running
    const viewButtons = document.querySelectorAll('.view-btn');
    
    if (viewButtons.length === 0) {
        console.error('No view buttons found');
        return;
    }

    viewButtons.forEach(button => {
        button.addEventListener('click', () => {
            console.log('View button clicked:', button.dataset); // Debugging: Log button data
            try {
                // Populate modal fields
                document.getElementById('modal-id').textContent = button.dataset.id || 'N/A';
                document.getElementById('modal-name').textContent = button.dataset.name || 'N/A';
                document.getElementById('modal-email').textContent = button.dataset.email || 'N/A';
                document.getElementById('modal-department').textContent = button.dataset.department || 'N/A';
                document.getElementById('modal-availability').textContent = button.dataset.availability || 'N/A';
                document.getElementById('modal-address').textContent = button.dataset.address || 'N/A';
                document.getElementById('modal-joining-date').textContent = button.dataset.joiningDate || 'N/A';
                document.getElementById('modal-shift-time').textContent = button.dataset.shiftTime || 'N/A';
                document.getElementById('modal-employee-id').textContent = button.dataset.employeeId || 'N/A';
                document.getElementById('modal-skills').textContent = button.dataset.skills || 'None';
                document.getElementById('modal-notes').textContent = button.dataset.notes || 'None';
            } catch (error) {
                console.error('Error populating modal:', error); // Debugging: Log any errors
            }
        });
    });
});