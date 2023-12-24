<div class="card mb-4 m-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Formateur
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered" id="datatablesSimple ">
                                    <thead>
                                        <tr>
                                            <th>lastname</th>
                                            <th>firstname</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>address</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                            <?php foreach ($formateurs as $formateur): ?>
                                                <tr>
                                                    <td><?= $formateur->getLastName() ?></td>
                                                    <td><?= $formateur->getFirstName() ?></td>
                                                    <td><?= $formateur->getEmail() ?></td>
                                                    <td><?= $formateur->getPhone() ?></td>
                                                    <td><?= $formateur->getAddress() ?></td>
                                                    <td>
                                                        <a href="formateur/delete?id=<?php echo $formateur->getId() ?>" class="btn btn-danger">delete</a>
                                                        <a href="formateur/edit?id=<?php echo $formateur->getId() ?>" class="btn btn-warning">update</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>