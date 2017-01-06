<?php
include_once 'header.php';
include_once 'contentHeader.php';
$i = 0;
$len = count($data);

?>
<?php foreach ($data as $key => $subj) : ?>
    <div class="subject"><?= $subj->getName(); ?></div>
    <div class="entry"><table class="content">
            <?php foreach ($subj->getEntries() as $key => $entry) : ?>
                <tr>
                    <td class="issue"><?= $entry->getIssue(); ?></td>
                    <td class="date"><a href="#edit_<?= $entry->getId(); ?>"  data-toggle="modal"> <?= jTime($entry->getDate()); ?></a></td>
                    <td class="page"><?= $entry->getPage(); ?></td>
                    <td class="comment"><?= $entry->getComment(); ?><div id="edit_<?= $entry->getId(); ?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form class="form-inline" method="post" action="add_edit_entry.php">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Изменить заметку в разделе "<?= $subj->getName(); ?>"</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="number" size="1" class="form-control" id="form_issue" name="form_issue" value="<?= $entry->getIssue(); ?>" placeholder="№" required>
                                                <select class="form-control" id="form_date_month" name="form_date_month">
                                                    <option <?php if (jMonth($entry->getDate()) == '01') : ?>selected <?php endif; ?>value="01">Январь</option>
                                                    <option <?php if (jMonth($entry->getDate()) == '02') : ?>selected <?php endif; ?>value="02">Февраль</option>
                                                    <option <?php if (jMonth($entry->getDate()) == '03') : ?>selected <?php endif; ?>value="03">Март</option>
                                                    <option <?php if (jMonth($entry->getDate()) == '04') : ?>selected <?php endif; ?>value="04">Апрель</option>
                                                    <option <?php if (jMonth($entry->getDate()) == '05') : ?>selected <?php endif; ?>value="05">Май</option>
                                                    <option <?php if (jMonth($entry->getDate()) == '06') : ?>selected <?php endif; ?>value="06">Июнь</option>
                                                    <option <?php if (jMonth($entry->getDate()) == '07') : ?>selected <?php endif; ?>value="07">Июль</option>
                                                    <option <?php if (jMonth($entry->getDate()) == '08') : ?>selected <?php endif; ?>value="08">Август</option>
                                                    <option <?php if (jMonth($entry->getDate()) == '09') : ?>selected <?php endif; ?>value="09">Сентябрь</option>
                                                    <option <?php if (jMonth($entry->getDate()) == '10') : ?>selected <?php endif; ?>value="10">Октябрь</option>
                                                    <option <?php if (jMonth($entry->getDate()) == '11') : ?>selected <?php endif; ?>value="11">Ноябрь</option>
                                                    <option <?php if (jMonth($entry->getDate()) == '12') : ?>selected <?php endif; ?>value="12">Декабрь</option>
                                                </select>
                                                <input type="number" size="2" class="form-control" id="form_date_year" name="form_date_year" value="<?= jYear($entry->getDate()); ?>" placeholder="Год" required>
                                                <input type="text" size="5" class="form-control" id="form_page" name="form_page" value="<?= $entry->getPage(); ?>" placeholder="Стр." required>
                                                <input type="text" size="60" class="form-control" id="form_comment" name="form_comment" value="<?= $entry->getComment(); ?>" placeholder="Комментарий">
                                                <input type="hidden" name="form_subject_id" value="<?= $subj->getId(); ?>">
                                                <input type="hidden" name="form_entry_id" value="<?= $entry->getId(); ?>">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                            <button type="submit" name="edit" value="1" class="btn btn-primary">Изменить</button>
                                            <button type="submit" name="delete" value="1" class="btn btn-danger">Удалить</button>
                                        </div></form>
                                </div>
                            </div>
                        </div></td></tr>
            <?php endforeach; ?>
            <tr><td class="additional" colspan="4"><ul><li class="addEntry"><a href="#add_<?= $subj->getId(); ?>" data-toggle="modal">Добавить заметку</a></li></ul>
                </td></tr>
        </table></div>
    <div id="add_<?= $subj->getId(); ?>" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-inline" method="post" action="add_edit_entry.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Добавить заметку в раздел "<?= $subj->getName(); ?>"</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="number" size="1" class="form-control" id="form_issue" name="form_issue" placeholder="№" required>
                            <select class="form-control" id="form_date_month" name="form_date_month">
                                <option value="01">Январь</option>
                                <option value="02">Февраль</option>
                                <option value="03">Март</option>
                                <option value="04">Апрель</option>
                                <option value="05">Май</option>
                                <option value="06">Июнь</option>
                                <option value="07">Июль</option>
                                <option value="08">Август</option>
                                <option value="09">Сентябрь</option>
                                <option value="10">Октябрь</option>
                                <option value="11">Ноябрь</option>
                                <option value="12">Декабрь</option>
                            </select>
                            <input type="number" size="2" class="form-control" id="form_date_year" name="form_date_year" placeholder="Год" required>
                            <input type="text" size="5" class="form-control" id="form_page" name="form_page" placeholder="Стр." required>
                            <input type="text" size="60" class="form-control" id="form_comment" name="form_comment" placeholder="Комментарий">
                            <input type="hidden" name="form_subject_id" value="<?= $subj->getId(); ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div></form>
            </div>
        </div>
    </div>
    <?php if ($i != ($len - 1)) : ?>
        <hr>
    <?php else : ?>
        <div class="cleaner"> </div>
    <?php endif; ?>
    <?php $i++; ?>
<?php endforeach; ?>
<?php include_once 'footer.php'; ?>