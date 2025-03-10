<?php include 'data.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Pokemon List</h2>
        <input type="text" id="search" class="form-control mb-3" placeholder="Search Pokemon...">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Pokemon Name</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody id="pokemon-table">
                <?php if ($data['results']): ?>
                    <?php foreach ($data['results'] as $pokemon2025): ?>
                        <tr>
                            <td><?= $pokemon2025['name'] ?></td>
                            <td><?= $pokemon2025['url'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="1" class="text-center">Failed to fetch data.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('search').addEventListener('keyup', function() {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll('#pokemon-table tr');
            
            rows.forEach(row => {
                let name = row.cells[0].textContent.toLowerCase();
                if (name.includes(filter)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>