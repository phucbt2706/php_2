<?php
$course = [
    's1' => 'course1',
    's2' => 'course2',
    's3' => 'course3'
];
//Model
function  get_courses()
{
    global $course;
    return array_values($course);
}
function  find_by_semester($semester)
{
    global $course;
    return (array_key_exists($semester,$course) ? $course[$semester]: 'Invalid course');
}

//Controller
$list_of_course = get_courses();
$semester = !empty($_GET['semester']) ? $_GET['semester'] : '';
$course_name = find_by_semester($semester);
$page_content = $course_name;
?>

<?= $page_content; ?>
<select name="courses">
    <?php foreach ($list_of_course as $course_name){?>
    <option><?= $course_name ?></option>
   <?php }?>
</select>
