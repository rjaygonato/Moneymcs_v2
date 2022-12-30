
<script src="includes/light_datatables.js"></script>
<link rel="stylesheet" href="includes/light_datastyle.css" />

<script>
    window.addEventListener('load', event => {
        const table = new simpleDatatables.DataTable(".table", {
            searchable: true,
            fixedHeight: false,
        });
    });
</script>