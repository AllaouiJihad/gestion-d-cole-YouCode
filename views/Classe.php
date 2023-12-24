<div class="card mb-4 m-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Classe
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered" id="datatablesSimple ">
                                    <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>level</th>
                                            <th>promotion</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                            <?php foreach ($classes as $classe): ?>
                                                <tr>
                                                    <td><?= $classe->getName() ?></td>
                                                    <td><?= $classe->getLevel() ?></td>
                                                    <td><?= $classe->getPromotion() ?></td>
                                                    <td>
                                                        <a href="formateur/delete?id=<?php echo $classe->getId() ?>" class="btn btn-danger">delete</a>
                                                        <a href="formateur/edit?id=<?php echo $classe->getId() ?>" class="btn btn-warning">update</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>