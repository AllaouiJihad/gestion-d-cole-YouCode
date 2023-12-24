<div class="card mb-4 m-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Apprenants
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
                                            <?php foreach ($apprenants as $apprenant): ?>
                                                <tr>
                                                    <td><?= $apprenant->getLastName() ?></td>
                                                    <td><?= $apprenant->getFirstName() ?></td>
                                                    <td><?= $apprenant->getEmail() ?></td>
                                                    <td><?= $apprenant->getPhone() ?></td>
                                                    <td><?= $apprenant->getAddress() ?></td>
                                                    <td>
                                                        <a href="apprenant/delete?id=<?php echo $apprenant->getId() ?>" class="btn btn-danger">delete</a>
                                                        <a href="apprenant/edit?id=<?php echo $apprenant->getId() ?>" class="btn btn-warning">update</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>