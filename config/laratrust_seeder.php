<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'Super Admin' => [
            'institution' => 'c,r,u,d',
            'academic-year' => 'c,r,u,d',
            'admin' => 'c,r,u,d',
            'gestionnaire' => 'c,r,u,d',
            'professor' => 'c,r,u,d',
            'student' => 'c,r,u,d',
            'student-status' => 'u',
            'parent' => 'c,r,u,d',
            'campus' => 'c,r,u,d',
            'department' => 'c,r,u,d',
            'department-status' => 'u',
            'filiaire' => 'c,r,u,d',
            'promotion' => 'c,r,u,d',
            'category' => 'c,r,u,d',
            'cours' => 'c,r,u,d',
            'cours-status' => 'u',
            'chapitre' => 'c,r,u,d',
            'lesson' => 'c,r,u,d',
            'resource' => 'c,r,u,d',
            'exercice' => 'c,r,u,d',
            'exercice-status' => 'u',
            'homework' => 'c,r,u,d',
            'homework-status' => 'c,r,u,d',
            'interro' => 'c,r,u,d',
            'interro-status' => 'u',
            'fee-type' => 'c,r,u,d',
            'fee' => 'c,r,u,d',
            'fee-status' => 'u',
            'expense-type' => 'c,r,u,d',
            'expense' => 'c,r,u,d',
            'exam-session' => 'c,r,u,d',
            'exam' => 'c,r,u,d',
            'exam-status' => 'c,r,u,d',
            'schedule' => 'c,r,u,d',
            'result' => 'c,r,u,d',
            'result-status' => 'u',
            'role' => 'c,r,u,d',
            'chat' => 'c,r,u,d',
            'event' => 'c,r,u,d',
            'notification' => 'c,r,u,d',
            'journal' => 'c,r,u,d',
            'calendar' => 'c,r,u,d',
            'aperi' => 'c,r,u,d',
            'profile' => 'c,r,u,d',
            'user' => 'c,r,u,d',
            'user-status' => 'u',
        ],
        'Admin' => [
            'institution' => 'r',
            'academic-year' => 'c,r,u,d',
            'gestionnaire' => 'c,r,u,d',
            'professor' => 'c,r,u,d',
            'student' => 'c,r,u,d',
            'student-status' => 'u',
            'parent' => 'c,r,u,d',
            'campus' => 'c,r,u,d',
            'department' => 'c,r,u,d',
            'department-status' => 'u',
            'filiaire' => 'c,r,u,d',
            'promotion' => 'c,r,u,d',
            'category' => 'c,r,u,d',
            'cours' => 'c,r,u,d',
            'cours-status' => 'u',
            'chapitre' => 'c,r,u,d',
            'lesson' => 'c,r,u,d',
            'resource' => 'c,r,u,d',
            'exercice' => 'c,r,u,d',
            'exercice-status' => 'u',
            'homework' => 'c,r,u,d',
            'homework-status' => 'c,r,u,d',
            'interro' => 'c,r,u,d',
            'interro-status' => 'u',
            'fee-type' => 'c,r,u,d',
            'fee' => 'c,r,u,d',
            'fee-status' => 'u',
            'expense-type' => 'c,r,u,d',
            'expense' => 'c,r,u,d',
            'exam-session' => 'c,r,u,d',
            'exam' => 'c,r,u,d',
            'exam-status' => 'c,r,u,d',
            'schedule' => 'c,r,u,d',
            'result' => 'c,r,u,d',
            'result-status' => 'u',
            'role' => 'r',
            'chat' => 'c,r,u,d',
            'event' => 'c,r,u,d',
            'notification' => 'c,r,u,d',
            'journal' => 'c,r,u,d',
            'calendar' => 'c,r,u,d',
            'aperi' => 'c,r,u,d',
            'profile' => 'c,r,u,d',
            'user' => 'c,r,u,d',
            'user-status' => 'u',
        ],
        'Etudiant' => [
            'institution' => 'r',
            'academic-year' => 'r',
            'professor' => 'r',
            'student' => 'r',
            'parent' => 'r',
            'campus' => 'r',
            'department' => 'r',
            'filiaire' => 'r',
            'promotion' => 'r',
            'cours' => 'r',
            'chapitre' => 'r',
            'lesson' => 'r',
            'resource' => 'r',
            'exercice' => 'r',
            'homework' => 'r',
            'interro' => 'r',
            'fee' => 'c,r,u,',
            'exam' => 'r',
            'result' => 'r',
            'event' => 'r',
            'notification' => 'r',
            'journal' => 'r',
            'calendar' => 'r',
            'aperi' => 'r',
            'chat' => 'r,u,c,d',
            'profile' => 'c,r,u,d',
        ],
        'Parent' => [
            'professor' => 'r',
            'student' => 'r',
            'parent' => 'r',
            'campus' => 'r',
            'department' => 'r',
            'filiaire' => 'r',
            'promotion' => 'r',
            'cours' => 'r',
            'chapitre' => 'r',
            'lesson' => 'r',
            'resource' => 'r',
            'exercice' => 'r',
            'homework' => 'r',
            'interro' => 'r',
            'fee' => 'c,r,u,',
            'exam' => 'r',
            'result' => 'r',
            'event' => 'r',
            'notification' => 'r',
            'journal' => 'r',
            'calendar' => 'r',
            'aperi' => 'r',
            'profile' => 'c,r,u,d',
        ],
        'Gestionnaire' => [
            'institution' => 'r',
            'academic-year' => 'c,r,u,d',
            'gestionnaire' => 'c,r,u,d',
            'professor' => 'c,r,u,d',
            'student' => 'c,r,u,d',
            'student-status' => 'u',
            'parent' => 'c,r,u,d',
            'campus' => 'r',
            'department' => 'r',
            'filiaire' => 'r',
            'promotion' => 'r',
            'fee-type' => 'c,r,u,d',
            'fee' => 'c,r,u,d',
            'fee-status' => 'u',
            'expense-type' => 'c,r,u,d',
            'expense' => 'c,r,u,d',
            'event' => 'c,r,u,d',
            'notification' => 'c,r,u,d',
            'aperi' => 'c,r,u,d',
            'profile' => 'c,r,u,d',
            'user-status' => 'u',
        ],
        'Professeur' => [
            'institution' => 'r',
            'academic-year' => 'r',
            'professor' => 'r,u',
            'student' => 'r',
            'student-status' => 'u',
            'parent' => 'r',
            'campus' => 'r',
            'department' => 'r',
            'filiaire' => 'r',
            'promotion' => 'r',
            'category' => 'c,r,u,d',
            'cours' => 'c,r,u,d',
            'cours-status' => 'u',
            'chapitre' => 'c,r,u,d',
            'lesson' => 'c,r,u,d',
            'resource' => 'c,r,u,d',
            'exercice' => 'c,r,u,d',
            'exercice-status' => 'u',
            'homework' => 'c,r,u,d',
            'homework-status' => 'c,r,u,d',
            'interro' => 'c,r,u,d',
            'interro-status' => 'u',
            'exam' => 'r',
            'schedule' => 'r',
            'result' => 'c,r',
            'chat' => 'c,r,u,d',
            'event' => 'r',
            'notification' => 'r',
            'journal' => 'c,r,u,d',
            'calendar' => 'r',
            'aperi' => 'c,r,u',
            'profile' => 'c,r,u,d',
        ],
        'Comptable' => [
            'institution' => 'r',
            'academic-year' => 'r',
            'student' => 'r',
            'fee-type' => 'c,r,u,d',
            'fee' => 'c,r,u,d',
            'fee-status' => 'u',
            'expense-type' => 'c,r,u,d',
            'expense' => 'c,r,u,d',
            'event' => 'r',
            'notification' => 'r',
            'journal' => 'r',
            'calendar' => 'r',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ]
];