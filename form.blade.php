
<div>
    <select class="form-control muhit-example" ></select>

</div>


<script>
$(".muhit-example").select2({
      ajax: {
        url: '{{ route("book.list.books") }}',
        dataType: 'json',
        delay: 250,
        data: function (params) {
           
          return {
            phrase: params.term, // search term,
            store_name: jQuery("#store_name").val(),
            page: 1
          };
        },

        processResults: function (data, params) {
            // console.log(data);
          params.page = params.page || 1;

          return {
            results: data.map(function(item) {
                console.log(item)
                return {
                    id: item.id,
                    text: item.name
                  };
            }),
            pagination: {
              more: 0
            }
          };
        },
        placeholder: 'Search for a book',
        cache: true
      },
      escapeMarkup: function (markup) { return markup; }, 
      minimumInputLength: 1
    });
	</script>