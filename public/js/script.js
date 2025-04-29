// استمع لكل زر عليه كلاس delete-button
document.querySelectorAll('.delete-button').forEach(function(button) {
    button.addEventListener('click', function(e) {
        e.preventDefault(); // منع الانتقال مباشرة

        const link = this.getAttribute('href'); // أخذ الرابط اللي بيحذف

        Swal.fire({
            title: "هل أنت متأكد أنك تريد حذف هذا الحقل؟",
            showCancelButton: true,
            confirmButtonText: "تأكيد",
            cancelButtonText: "إلغاء",
            confirmButtonColor: '#d33',
            customClass: {
                confirmButton: 'no-outline',
                cancelButton: 'no-outline'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                // بعد الحذف، يظهر تأكيد آخر
                Swal.fire({
                    title: 'تم حذف الحقل بنجاح',
                    icon: 'success',
                    confirmButtonText: 'موافق',
                    confirmButtonColor: '#3085d6'
                }).then(() => {
                    // بعد أن يضغط المستخدم "موافق"، يذهب إلى الرابط
                    window.location.href = link;
                });
            }
        });
    });
});
