$(function () {


    $('#example').dataTable({
        paging: false,
        fixedHeader: {
            header: true
        },
        dom: 'Bfrtip',
        buttons: [{
                extend: 'excel',
                text: 'Excel <i class="bi bi-download" aria-hidden="true"></i>'
            },
            {
                extend: 'pdf',
                text: 'PDF  <i class="bi bi-download" aria-hidden="true"></i>'
            },

            'copy',
            'pdf',
            'colvis'
        ],


    });

    $('#events').dataTable({
        paging: false,
        fixedHeader: {
            header: false
        },
        dom: 'Bfrtip',
        buttons: [
            'colvis'
        ],


    });

});
