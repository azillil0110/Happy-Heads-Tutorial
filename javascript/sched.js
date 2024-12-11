const days = [
    { name: "mon", prefix: "m" },
    { name: "tue", prefix: "t" },
    { name: "wed", prefix: "w" },
    { name: "thu", prefix: "th" },
    { name: "fri", prefix: "f" },
    { name: "sat", prefix: "s" }
];

days.forEach(({ name, prefix }) => {
    const checkbox = document.querySelector(`input[name="${name}"]`);
    const startTime = document.querySelector(`input[name="${prefix}time1"]`);
    const endTime = document.querySelector(`input[name="${prefix}time2"]`);

    if (checkbox && startTime && endTime) {
    checkbox.addEventListener('change', () => {
        if (checkbox.checked) {
            startTime.disabled = false;
            endTime.disabled = false;
            startTime.required = true;
            endTime.required = true;
        } else {
            startTime.disabled = true;
            endTime.disabled = true;
            startTime.required = false;
            endTime.required = false;
            startTime.value = '';
            endTime.value = '';
        }
    });
}
});