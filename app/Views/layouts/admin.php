<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- Bootstrap v5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Datatables v1.13.4 CSS -->
    <link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/datatables.min.css" rel="stylesheet">
    <!-- AutoComplete.JS v10.2.7 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/css/autoComplete.01.min.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="/assets/css/adminStyles.css">
    <!-- DataTables v1.13.4 JS Bundle w/jQuery -->
    <script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/datatables.min.js"></script>
    <!-- Bootstrap v5.3 JS Bundle-->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- AutoComplete.JS v10.2.7 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>
    <!-- DataTables v1.13.4 Initialization and Configuration -->
    <script src="/assets/js/admin/dataTable.js"></script>
</head>

<body class="bg-light">
    <main class="d-flex">
        <?= view_cell('ToastCell') ?>
        <aside class="col-12 col-lg-2 position-fixed nav-z">
            <?= view_cell('SidebarCell', ['title' => $title]) ?>
        </aside>
        <section class="col-12 col-lg-10 offset-lg-2 p-4 custom-margin">
            <div class="d-none d-lg-block">
                <h1><?= $title ?></h1>
                <hr>
            </div>
            <?= $this->renderSection('adminContent') ?>
        </section>
    </main>
    <?= view_cell('ModalCell', ['type' => 'prompt', 'content' => 'Are you sure you want to log out?', 'id' => 'logout', "action" => url_to('logout')]) ?>
</body>

</html>