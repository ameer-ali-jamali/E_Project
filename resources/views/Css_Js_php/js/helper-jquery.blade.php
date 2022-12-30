<script>
    $(document).ready(function() {
        $('#successMessage').hide();
        $('.getUserId').click(function() {
            var userId = $(this).val();
            $.ajax({
                type: "get",
                url: "/getUserInfoById/" + userId,
                datatype: "josn",
                success: function(response) {
                    if (response == 404) {
                        $('#updateFormErrorMessage').html("Server Error Data Not Found");
                        $('#updateFormErrorMessage').addClass("alert alert-danger");
                        $('#updateFormErrorMessage').text(response.message);
                    } else {
                        $('#userIdForUpdate').val(response.user.id)
                        $('#updateFormUserId').val(response.user.id)
                        $('#updateUserFirstName').val(response.user.firstName)
                        $('#updateUserLastName').val(response.user.lastName)
                        $('#updateUserEmail').val(response.user.email)
                    }
                }
            })
        })
        $('.getBookId').click(function() {
            var bookId = $(this).val();
            $.ajax({
                type: "get",
                url: "/getBookInfoById/" + bookId,
                datatype: "josn",
                success: function(response) {
                    if (response == 404) {
                        $('#booksErrorMessage').html("Server Error Data Not Found");
                        $('#booksErrorMessage').addClass("alert alert-danger");
                        $('#booksErrorMessage').text(response.message);
                    } else {
                        $('#bookId').val(response.getBookData.id)
                        $('#bookIdForUpdate').val(response.getBookData.id)
                        $('#updateBookName').val(response.getBookData.name)
                        $('#updateBookIssueDate').val(response.getBookData.issueDate)
                        $('#updateBookAuthorName').val(response.getBookData.authorName)
                        $('#updateBookAuthorEmail').val(response.getBookData.authorEmail)
                        $('#updateBookDescription').val(response.getBookData.description)
                    }
                }
            })

        })
        $('#updateUserSuccessMessage').hide('fast')
        $('#updateBookSuccessMessage').hide('fast')
        $('#usersListModel').hide("fast")
        $('#booksListModel').hide("fast")
        $('#booksList').click(function() {
            $('#usersListModel').hide("fast")
            $('#booksListModel').toggle('fast')
        });
        $('#usersList').click(function() {
            $('#booksListModel').hide('fast')
            $('#usersListModel').toggle('fast')
        });
        $('#userCountById').click(function() {
            $('#userCountById').hide('fast')
            $('#bookCountById').hide('fast')
            $('#visitorsCard').hide("fast")
            $('#booksdownloads').hide("fast")
            $('#usersListModel').show("fast")
        })
        $('#bookCountById').click(function() {
            $('#userCountById').hide('fast')
            $('#bookCountById').hide('fast')
            $('#visitorsCard').hide("fast")
            $('#booksdownloads').hide("fast")
            $('#booksListModel').toggle("fast")
        })

    })
</script>