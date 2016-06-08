<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AccountSettingsController' => $baseDir . '/app/controllers/AccountSettingsController.php',
    'AdminsController' => $baseDir . '/app/controllers/AdminsController.php',
    'AssignmentsController' => $baseDir . '/app/controllers/AssignmentsController.php',
    'AttendanceController' => $baseDir . '/app/controllers/AttendanceController.php',
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'CallRate' => $baseDir . '/app/libraries/SMS/Hoiio/lib/CallRate.php',
    'CallService' => $baseDir . '/app/libraries/SMS/Hoiio/lib/CallService.php',
    'CallStatus' => $baseDir . '/app/libraries/SMS/Hoiio/lib/CallStatus.php',
    'CallTransaction' => $baseDir . '/app/libraries/SMS/Hoiio/lib/CallTransaction.php',
    'ClassScheduleController' => $baseDir . '/app/controllers/ClassScheduleController.php',
    'ClassesController' => $baseDir . '/app/controllers/ClassesController.php',
    'ConferenceMember' => $baseDir . '/app/libraries/SMS/Hoiio/lib/ConferenceMember.php',
    'ConferenceRoom' => $baseDir . '/app/libraries/SMS/Hoiio/lib/ConferenceRoom.php',
    'CreateAuthTokenTable' => $vendorDir . '/tappleby/laravel-auth-token/src/migrations/2013_05_12_014954_create_auth_token_table.php',
    'DashboardController' => $baseDir . '/app/controllers/DashboardController.php',
    'DashboardInit' => $baseDir . '/app/libraries/DashboardInit.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'Datamatrix' => $vendorDir . '/tecnickcom/tcpdf/include/barcodes/datamatrix.php',
    'DormitoriesController' => $baseDir . '/app/controllers/DormitoriesController.php',
    'EventsController' => $baseDir . '/app/controllers/EventsController.php',
    'ExamsListController' => $baseDir . '/app/controllers/ExamsListController.php',
    'Excel_XML' => $baseDir . '/app/libraries/php-excel.php',
    'FPDF' => $baseDir . '/app/libraries/fpdf.php',
    'GradeLevelsController' => $baseDir . '/app/controllers/GradeLevelsController.php',
    'HTTPService' => $baseDir . '/app/libraries/SMS/Hoiio/lib/HTTPService.php',
    'HoiioException' => $baseDir . '/app/libraries/SMS/Hoiio/lib/HoiioException.php',
    'HoiioService' => $baseDir . '/app/libraries/SMS/Hoiio/HoiioService.php',
    'IVRCallState' => $baseDir . '/app/libraries/SMS/Hoiio/lib/IVRCallState.php',
    'IVRNotification' => $baseDir . '/app/libraries/SMS/Hoiio/lib/IVRNotification.php',
    'IVRService' => $baseDir . '/app/libraries/SMS/Hoiio/lib/IVRService.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'InstallController' => $baseDir . '/app/controllers/InstallController.php',
    'IntelliSMS' => $baseDir . '/app/libraries/SMS/IntelliSMS/IntelliSMS.php',
    'JWT' => $baseDir . '/app/libraries/SMS/Twilio/Capability.php',
    'LanguagesController' => $baseDir . '/app/controllers/LanguagesController.php',
    'LibraryController' => $baseDir . '/app/controllers/LibraryController.php',
    'LoginController' => $baseDir . '/app/controllers/LoginController.php',
    'MailSMSTemplatesController' => $baseDir . '/app/controllers/MailSMSTemplatesController.php',
    'MailSmsController' => $baseDir . '/app/controllers/MailSmsController.php',
    'MailSmsHandler' => $baseDir . '/app/libraries/MailSmsHandler.php',
    'MediaController' => $baseDir . '/app/controllers/MediaController.php',
    'MessagesController' => $baseDir . '/app/controllers/MessagesController.php',
    'NewsBoardController' => $baseDir . '/app/controllers/NewsBoardController.php',
    'NexmoMessage' => $baseDir . '/app/libraries/SMS/NexmoMessage.php',
    'OLERead' => $baseDir . '/app/libraries/Excel/oleread.inc',
    'OnlineExamsController' => $baseDir . '/app/controllers/OnlineExamsController.php',
    'PDF417' => $vendorDir . '/tecnickcom/tcpdf/include/barcodes/pdf417.php',
    'PHPMailer' => $baseDir . '/app/libraries/class.phpmailer.php',
    'ParentsController' => $baseDir . '/app/controllers/ParentsController.php',
    'PaymentsController' => $baseDir . '/app/controllers/PaymentsController.php',
    'PollsController' => $baseDir . '/app/controllers/PollsController.php',
    'QRcode' => $vendorDir . '/tecnickcom/tcpdf/include/barcodes/qrcode.php',
    'SAttendanceController' => $baseDir . '/app/controllers/SAttendanceController.php',
    'SMSRate' => $baseDir . '/app/libraries/SMS/Hoiio/lib/SMSRate.php',
    'SMSService' => $baseDir . '/app/libraries/SMS/Hoiio/lib/SMSService.php',
    'SMSStatus' => $baseDir . '/app/libraries/SMS/Hoiio/lib/SMSStatus.php',
    'SMSTransaction' => $baseDir . '/app/libraries/SMS/Hoiio/lib/SMSTransaction.php',
    'SMTP' => $baseDir . '/app/libraries/class.smtp.php',
    'ScopeURI' => $baseDir . '/app/libraries/SMS/Twilio/Capability.php',
    'Services_Twilio' => $baseDir . '/app/libraries/Twilio.php',
    'Services_Twilio_AutoPagingIterator' => $baseDir . '/app/libraries/SMS/Twilio/AutoPagingIterator.php',
    'Services_Twilio_Capability' => $baseDir . '/app/libraries/SMS/Twilio/Capability.php',
    'Services_Twilio_HttpException' => $baseDir . '/app/libraries/SMS/Twilio/HttpException.php',
    'Services_Twilio_HttpStream' => $baseDir . '/app/libraries/SMS/Twilio/HttpStream.php',
    'Services_Twilio_HttpStreamException' => $baseDir . '/app/libraries/SMS/Twilio/HttpStream.php',
    'Services_Twilio_InstanceResource' => $baseDir . '/app/libraries/SMS/Twilio/InstanceResource.php',
    'Services_Twilio_ListResource' => $baseDir . '/app/libraries/SMS/Twilio/ListResource.php',
    'Services_Twilio_NumberType' => $baseDir . '/app/libraries/SMS/Twilio/NumberType.php',
    'Services_Twilio_Page' => $baseDir . '/app/libraries/SMS/Twilio/Page.php',
    'Services_Twilio_PartialApplicationHelper' => $baseDir . '/app/libraries/SMS/Twilio/PartialApplicationHelper.php',
    'Services_Twilio_RequestValidator' => $baseDir . '/app/libraries/SMS/Twilio/RequestValidator.php',
    'Services_Twilio_Resource' => $baseDir . '/app/libraries/SMS/Twilio/Resource.php',
    'Services_Twilio_RestException' => $baseDir . '/app/libraries/SMS/Twilio/RestException.php',
    'Services_Twilio_Rest_Account' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Account.php',
    'Services_Twilio_Rest_Accounts' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Accounts.php',
    'Services_Twilio_Rest_AllTime' => $baseDir . '/app/libraries/SMS/Twilio/Rest/UsageRecords.php',
    'Services_Twilio_Rest_Application' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Application.php',
    'Services_Twilio_Rest_Applications' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Applications.php',
    'Services_Twilio_Rest_AuthorizedConnectApp' => $baseDir . '/app/libraries/SMS/Twilio/Rest/AuthorizedConnectApp.php',
    'Services_Twilio_Rest_AuthorizedConnectApps' => $baseDir . '/app/libraries/SMS/Twilio/Rest/AuthorizedConnectApps.php',
    'Services_Twilio_Rest_AvailablePhoneNumber' => $baseDir . '/app/libraries/SMS/Twilio/Rest/AvailablePhoneNumber.php',
    'Services_Twilio_Rest_AvailablePhoneNumbers' => $baseDir . '/app/libraries/SMS/Twilio/Rest/AvailablePhoneNumbers.php',
    'Services_Twilio_Rest_Call' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Call.php',
    'Services_Twilio_Rest_Calls' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Calls.php',
    'Services_Twilio_Rest_Conference' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Conference.php',
    'Services_Twilio_Rest_Conferences' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Conferences.php',
    'Services_Twilio_Rest_ConnectApp' => $baseDir . '/app/libraries/SMS/Twilio/Rest/ConnectApp.php',
    'Services_Twilio_Rest_ConnectApps' => $baseDir . '/app/libraries/SMS/Twilio/Rest/ConnectApps.php',
    'Services_Twilio_Rest_Credential' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Credential.php',
    'Services_Twilio_Rest_CredentialList' => $baseDir . '/app/libraries/SMS/Twilio/Rest/CredentialList.php',
    'Services_Twilio_Rest_CredentialListMapping' => $baseDir . '/app/libraries/SMS/Twilio/Rest/CredentialListMapping.php',
    'Services_Twilio_Rest_CredentialListMappings' => $baseDir . '/app/libraries/SMS/Twilio/Rest/CredentialListMappings.php',
    'Services_Twilio_Rest_CredentialLists' => $baseDir . '/app/libraries/SMS/Twilio/Rest/CredentialLists.php',
    'Services_Twilio_Rest_Credentials' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Credentials.php',
    'Services_Twilio_Rest_Daily' => $baseDir . '/app/libraries/SMS/Twilio/Rest/UsageRecords.php',
    'Services_Twilio_Rest_Domain' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Domain.php',
    'Services_Twilio_Rest_Domains' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Domains.php',
    'Services_Twilio_Rest_IncomingPhoneNumber' => $baseDir . '/app/libraries/SMS/Twilio/Rest/IncomingPhoneNumber.php',
    'Services_Twilio_Rest_IncomingPhoneNumbers' => $baseDir . '/app/libraries/SMS/Twilio/Rest/IncomingPhoneNumbers.php',
    'Services_Twilio_Rest_IpAccessControlList' => $baseDir . '/app/libraries/SMS/Twilio/Rest/IpAccessControlList.php',
    'Services_Twilio_Rest_IpAccessControlListMapping' => $baseDir . '/app/libraries/SMS/Twilio/Rest/IpAccessControlListMapping.php',
    'Services_Twilio_Rest_IpAccessControlListMappings' => $baseDir . '/app/libraries/SMS/Twilio/Rest/IpAccessControlListMappings.php',
    'Services_Twilio_Rest_IpAccessControlLists' => $baseDir . '/app/libraries/SMS/Twilio/Rest/IpAccessControlLists.php',
    'Services_Twilio_Rest_IpAddress' => $baseDir . '/app/libraries/SMS/Twilio/Rest/IpAddress.php',
    'Services_Twilio_Rest_IpAddresses' => $baseDir . '/app/libraries/SMS/Twilio/Rest/IpAddresses.php',
    'Services_Twilio_Rest_LastMonth' => $baseDir . '/app/libraries/SMS/Twilio/Rest/UsageRecords.php',
    'Services_Twilio_Rest_Local' => $baseDir . '/app/libraries/SMS/Twilio/Rest/IncomingPhoneNumbers.php',
    'Services_Twilio_Rest_Media' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Media.php',
    'Services_Twilio_Rest_MediaInstance' => $baseDir . '/app/libraries/SMS/Twilio/Rest/MediaInstance.php',
    'Services_Twilio_Rest_Member' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Member.php',
    'Services_Twilio_Rest_Members' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Members.php',
    'Services_Twilio_Rest_Message' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Message.php',
    'Services_Twilio_Rest_Messages' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Messages.php',
    'Services_Twilio_Rest_Mobile' => $baseDir . '/app/libraries/SMS/Twilio/Rest/IncomingPhoneNumbers.php',
    'Services_Twilio_Rest_Monthly' => $baseDir . '/app/libraries/SMS/Twilio/Rest/UsageRecords.php',
    'Services_Twilio_Rest_Notification' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Notification.php',
    'Services_Twilio_Rest_Notifications' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Notifications.php',
    'Services_Twilio_Rest_OutgoingCallerId' => $baseDir . '/app/libraries/SMS/Twilio/Rest/OutgoingCallerId.php',
    'Services_Twilio_Rest_OutgoingCallerIds' => $baseDir . '/app/libraries/SMS/Twilio/Rest/OutgoingCallerIds.php',
    'Services_Twilio_Rest_Participant' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Participant.php',
    'Services_Twilio_Rest_Participants' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Participants.php',
    'Services_Twilio_Rest_Queue' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Queue.php',
    'Services_Twilio_Rest_Queues' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Queues.php',
    'Services_Twilio_Rest_Recording' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Recording.php',
    'Services_Twilio_Rest_Recordings' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Recordings.php',
    'Services_Twilio_Rest_Sandbox' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Sandbox.php',
    'Services_Twilio_Rest_ShortCode' => $baseDir . '/app/libraries/SMS/Twilio/Rest/ShortCode.php',
    'Services_Twilio_Rest_ShortCodes' => $baseDir . '/app/libraries/SMS/Twilio/Rest/ShortCodes.php',
    'Services_Twilio_Rest_Sip' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Sip.php',
    'Services_Twilio_Rest_SmsMessage' => $baseDir . '/app/libraries/SMS/Twilio/Rest/SmsMessage.php',
    'Services_Twilio_Rest_SmsMessages' => $baseDir . '/app/libraries/SMS/Twilio/Rest/SmsMessages.php',
    'Services_Twilio_Rest_ThisMonth' => $baseDir . '/app/libraries/SMS/Twilio/Rest/UsageRecords.php',
    'Services_Twilio_Rest_Today' => $baseDir . '/app/libraries/SMS/Twilio/Rest/UsageRecords.php',
    'Services_Twilio_Rest_TollFree' => $baseDir . '/app/libraries/SMS/Twilio/Rest/IncomingPhoneNumbers.php',
    'Services_Twilio_Rest_Transcription' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Transcription.php',
    'Services_Twilio_Rest_Transcriptions' => $baseDir . '/app/libraries/SMS/Twilio/Rest/Transcriptions.php',
    'Services_Twilio_Rest_UsageRecord' => $baseDir . '/app/libraries/SMS/Twilio/Rest/UsageRecord.php',
    'Services_Twilio_Rest_UsageRecords' => $baseDir . '/app/libraries/SMS/Twilio/Rest/UsageRecords.php',
    'Services_Twilio_Rest_UsageTrigger' => $baseDir . '/app/libraries/SMS/Twilio/Rest/UsageTrigger.php',
    'Services_Twilio_Rest_UsageTriggers' => $baseDir . '/app/libraries/SMS/Twilio/Rest/UsageTriggers.php',
    'Services_Twilio_Rest_Yearly' => $baseDir . '/app/libraries/SMS/Twilio/Rest/UsageRecords.php',
    'Services_Twilio_Rest_Yesterday' => $baseDir . '/app/libraries/SMS/Twilio/Rest/UsageRecords.php',
    'Services_Twilio_SIPListResource' => $baseDir . '/app/libraries/SMS/Twilio/SIPListResource.php',
    'Services_Twilio_TimeRangeResource' => $baseDir . '/app/libraries/SMS/Twilio/TimeRangeResource.php',
    'Services_Twilio_TinyHttp' => $baseDir . '/app/libraries/SMS/Twilio/TinyHttp.php',
    'Services_Twilio_TinyHttpException' => $baseDir . '/app/libraries/SMS/Twilio/TinyHttp.php',
    'Services_Twilio_Twiml' => $baseDir . '/app/libraries/SMS/Twilio/Twiml.php',
    'Services_Twilio_TwimlException' => $baseDir . '/app/libraries/SMS/Twilio/Twiml.php',
    'Services_Twilio_UsageResource' => $baseDir . '/app/libraries/SMS/Twilio/UsageResource.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'SimpleEmailService' => $baseDir . '/app/libraries/SMS/amazonses.php',
    'SimpleEmailServiceMessage' => $baseDir . '/app/libraries/SMS/amazonses.php',
    'SimpleEmailServiceRequest' => $baseDir . '/app/libraries/SMS/amazonses.php',
    'SiteSettingsController' => $baseDir . '/app/controllers/SiteSettingsController.php',
    'Spreadsheet_Excel_Reader' => $baseDir . '/app/libraries/Excel/reader.php',
    'StaticPagesController' => $baseDir . '/app/controllers/StaticPagesController.php',
    'StudentsController' => $baseDir . '/app/controllers/StudentsController.php',
    'StudyMaterialController' => $baseDir . '/app/controllers/StudyMaterialController.php',
    'SubjectsController' => $baseDir . '/app/controllers/SubjectsController.php',
    'Symfony\\Component\\HttpFoundation\\Resources\\stubs\\FakeFile' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/FakeFile.php',
    'TCPDF' => $vendorDir . '/tecnickcom/tcpdf/tcpdf.php',
    'TCPDF2DBarcode' => $vendorDir . '/tecnickcom/tcpdf/tcpdf_barcodes_2d.php',
    'TCPDFBarcode' => $vendorDir . '/tecnickcom/tcpdf/tcpdf_barcodes_1d.php',
    'TCPDF_COLORS' => $vendorDir . '/tecnickcom/tcpdf/include/tcpdf_colors.php',
    'TCPDF_FILTERS' => $vendorDir . '/tecnickcom/tcpdf/include/tcpdf_filters.php',
    'TCPDF_FONTS' => $vendorDir . '/tecnickcom/tcpdf/include/tcpdf_fonts.php',
    'TCPDF_FONT_DATA' => $vendorDir . '/tecnickcom/tcpdf/include/tcpdf_font_data.php',
    'TCPDF_IMAGES' => $vendorDir . '/tecnickcom/tcpdf/include/tcpdf_images.php',
    'TCPDF_IMPORT' => $vendorDir . '/tecnickcom/tcpdf/tcpdf_import.php',
    'TCPDF_PARSER' => $vendorDir . '/tecnickcom/tcpdf/tcpdf_parser.php',
    'TCPDF_STATIC' => $vendorDir . '/tecnickcom/tcpdf/include/tcpdf_static.php',
    'TeachersController' => $baseDir . '/app/controllers/TeachersController.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'TransactionHistory' => $baseDir . '/app/libraries/SMS/Hoiio/lib/TransactionHistory.php',
    'TransportsController' => $baseDir . '/app/controllers/TransportsController.php',
    'User' => $baseDir . '/app/models/User.php',
    'academicYear' => $baseDir . '/app/models/academicYear.php',
    'academicYearController' => $baseDir . '/app/controllers/academicYearController.php',
    'assignments' => $baseDir . '/app/models/assignments.php',
    'assignmentsAnswers' => $baseDir . '/app/models/assignmentsAnswers.php',
    'attendance' => $baseDir . '/app/models/attendance.php',
    'bookLibrary' => $baseDir . '/app/models/bookLibrary.php',
    'classSchedule' => $baseDir . '/app/models/classSchedule.php',
    'classes' => $baseDir . '/app/models/classes.php',
    'dormitories' => $baseDir . '/app/models/dormitories.php',
    'events' => $baseDir . '/app/models/events.php',
    'examMarks' => $baseDir . '/app/models/examMarks.php',
    'examsList' => $baseDir . '/app/models/examsList.php',
    'expenses' => $baseDir . '/app/models/expenses.php',
    'expensesController' => $baseDir . '/app/controllers/expensesController.php',
    'feeAllocation' => $baseDir . '/app/models/feeAllocation.php',
    'feeAllocationController' => $baseDir . '/app/controllers/feeAllocationController.php',
    'feeType' => $baseDir . '/app/models/feeType.php',
    'feeTypesController' => $baseDir . '/app/controllers/feeTypesController.php',
    'gradeLevels' => $baseDir . '/app/models/gradeLevels.php',
    'hostel' => $baseDir . '/app/models/hostel.php',
    'hostelCat' => $baseDir . '/app/models/hostelCat.php',
    'hostelCatController' => $baseDir . '/app/controllers/hostelCatController.php',
    'hostelController' => $baseDir . '/app/controllers/hostelController.php',
    'languages' => $baseDir . '/app/models/languages.php',
    'mailsms' => $baseDir . '/app/models/mailsms.php',
    'mailsmsTemplates' => $baseDir . '/app/models/mailsmsTemplates.php',
    'mediaAlbums' => $baseDir . '/app/models/mediaAlbums.php',
    'mediaItems' => $baseDir . '/app/models/mediaItems.php',
    'messages' => $baseDir . '/app/models/messages.php',
    'messagesList' => $baseDir . '/app/models/messagesList.php',
    'newsboard' => $baseDir . '/app/models/newsboard.php',
    'onlineExams' => $baseDir . '/app/models/onlineExams.php',
    'onlineExamsGrades' => $baseDir . '/app/models/onlineExamsGrades.php',
    'payments' => $baseDir . '/app/models/payments.php',
    'phpmailerException' => $baseDir . '/app/libraries/class.phpmailer.php',
    'polls' => $baseDir . '/app/models/polls.php',
    'promotionController' => $baseDir . '/app/controllers/promotionController.php',
    'reportsController' => $baseDir . '/app/controllers/reportsController.php',
    'sections' => $baseDir . '/app/models/sections.php',
    'sectionsController' => $baseDir . '/app/controllers/sectionsController.php',
    'settings' => $baseDir . '/app/models/settings.php',
    'staticPages' => $baseDir . '/app/models/staticPages.php',
    'studentAcademicYears' => $baseDir . '/app/models/studentAcademicYears.php',
    'studyMaterial' => $baseDir . '/app/models/studyMaterial.php',
    'subject' => $baseDir . '/app/models/subject.php',
    'transportation' => $baseDir . '/app/models/transportation.php',
    'upgradeController' => $baseDir . '/app/controllers/upgradeController.php',
    'vacation' => $baseDir . '/app/models/vacation.php',
    'vacationController' => $baseDir . '/app/controllers/vacationController.php',
);