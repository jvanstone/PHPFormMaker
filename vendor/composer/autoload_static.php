<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd306f134712eb131e993ebf50ccd95ba
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SlevomatCodingStandard\\' => 23,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
            'PHPFormMaker\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SlevomatCodingStandard\\' => 
        array (
            0 => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'PHPFormMaker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Suin\\Sniffs\\Classes\\' => 
            array (
                0 => __DIR__ . '/..' . '/suin/phpcs-psr4-sniff/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PHPFormMaker\\FormMaker\\FormMaker' => __DIR__ . '/../..' . '/src/FormMaker/FormMaker.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'SlevomatCodingStandard\\Helpers\\Annotation' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/Annotation.php',
        'SlevomatCodingStandard\\Helpers\\AnnotationHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/AnnotationHelper.php',
        'SlevomatCodingStandard\\Helpers\\CatchHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/CatchHelper.php',
        'SlevomatCodingStandard\\Helpers\\ClassHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/ClassHelper.php',
        'SlevomatCodingStandard\\Helpers\\Comment' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/Comment.php',
        'SlevomatCodingStandard\\Helpers\\ConditionHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/ConditionHelper.php',
        'SlevomatCodingStandard\\Helpers\\ConstantHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/ConstantHelper.php',
        'SlevomatCodingStandard\\Helpers\\DocCommentHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/DocCommentHelper.php',
        'SlevomatCodingStandard\\Helpers\\EmptyFileException' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/EmptyFileException.php',
        'SlevomatCodingStandard\\Helpers\\FunctionHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/FunctionHelper.php',
        'SlevomatCodingStandard\\Helpers\\IdentificatorHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/IdentificatorHelper.php',
        'SlevomatCodingStandard\\Helpers\\NamespaceHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/NamespaceHelper.php',
        'SlevomatCodingStandard\\Helpers\\ParameterHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/ParameterHelper.php',
        'SlevomatCodingStandard\\Helpers\\ParameterTypeHint' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/ParameterTypeHint.php',
        'SlevomatCodingStandard\\Helpers\\PropertyHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/PropertyHelper.php',
        'SlevomatCodingStandard\\Helpers\\ReferencedName' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/ReferencedName.php',
        'SlevomatCodingStandard\\Helpers\\ReferencedNameHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/ReferencedNameHelper.php',
        'SlevomatCodingStandard\\Helpers\\ReturnTypeHint' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/ReturnTypeHint.php',
        'SlevomatCodingStandard\\Helpers\\ScopeHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/ScopeHelper.php',
        'SlevomatCodingStandard\\Helpers\\SniffSettingsHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/SniffSettingsHelper.php',
        'SlevomatCodingStandard\\Helpers\\StringHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/StringHelper.php',
        'SlevomatCodingStandard\\Helpers\\SuppressHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/SuppressHelper.php',
        'SlevomatCodingStandard\\Helpers\\TokenHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/TokenHelper.php',
        'SlevomatCodingStandard\\Helpers\\TokenPointerOutOfBoundsException' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/TokenPointerOutOfBoundsException.php',
        'SlevomatCodingStandard\\Helpers\\TypeHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/TypeHelper.php',
        'SlevomatCodingStandard\\Helpers\\TypeHintHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/TypeHintHelper.php',
        'SlevomatCodingStandard\\Helpers\\UseStatement' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/UseStatement.php',
        'SlevomatCodingStandard\\Helpers\\UseStatementHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/UseStatementHelper.php',
        'SlevomatCodingStandard\\Helpers\\VariableHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/VariableHelper.php',
        'SlevomatCodingStandard\\Helpers\\YodaHelper' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Helpers/YodaHelper.php',
        'SlevomatCodingStandard\\Sniffs\\Arrays\\DisallowImplicitArrayCreationSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Arrays/DisallowImplicitArrayCreationSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Arrays\\TrailingArrayCommaSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Arrays/TrailingArrayCommaSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Classes\\ClassConstantVisibilitySniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Classes/ClassConstantVisibilitySniff.php',
        'SlevomatCodingStandard\\Sniffs\\Classes\\DisallowLateStaticBindingForConstantsSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Classes/DisallowLateStaticBindingForConstantsSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Classes\\DisallowLateStaticBindingForContantsSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Classes/DisallowLateStaticBindingForContantsSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Classes\\ModernClassNameReferenceSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Classes/ModernClassNameReferenceSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Classes\\SuperfluousAbstractClassNamingSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Classes/SuperfluousAbstractClassNamingSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Classes\\SuperfluousExceptionNamingSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Classes/SuperfluousExceptionNamingSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Classes\\SuperfluousInterfaceNamingSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Classes/SuperfluousInterfaceNamingSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Classes\\TraitUseDeclarationSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Classes/TraitUseDeclarationSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Classes\\TraitUseSpacingSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Classes/TraitUseSpacingSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Classes\\UnusedPrivateElementsSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Classes/UnusedPrivateElementsSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Classes\\UselessLateStaticBindingSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Classes/UselessLateStaticBindingSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Commenting\\DisallowOneLinePropertyDocCommentSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Commenting/DisallowOneLinePropertyDocCommentSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Commenting\\DocCommentSpacingSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Commenting/DocCommentSpacingSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Commenting\\EmptyCommentSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Commenting/EmptyCommentSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Commenting\\ForbiddenAnnotationsSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Commenting/ForbiddenAnnotationsSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Commenting\\ForbiddenCommentsSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Commenting/ForbiddenCommentsSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Commenting\\InlineDocCommentDeclarationSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Commenting/InlineDocCommentDeclarationSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Commenting\\RequireOneLinePropertyDocCommentSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Commenting/RequireOneLinePropertyDocCommentSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Commenting\\UselessInheritDocCommentSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Commenting/UselessInheritDocCommentSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\AssignmentInConditionSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/AssignmentInConditionSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\ControlStructureSpacingSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/ControlStructureSpacingSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\DisallowContinueWithoutIntegerOperandInSwitchSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/DisallowContinueWithoutIntegerOperandInSwitchSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\DisallowEmptySniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/DisallowEmptySniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\DisallowEqualOperatorsSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/DisallowEqualOperatorsSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\DisallowShortTernaryOperatorSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/DisallowShortTernaryOperatorSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\DisallowYodaComparisonSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/DisallowYodaComparisonSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\EarlyExitSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/EarlyExitSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\LanguageConstructWithParenthesesSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/LanguageConstructWithParenthesesSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\NewWithParenthesesSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/NewWithParenthesesSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\NewWithoutParenthesesSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/NewWithoutParenthesesSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\RequireMultiLineTernaryOperatorSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/RequireMultiLineTernaryOperatorSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\RequireNullCoalesceOperatorSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/RequireNullCoalesceOperatorSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\RequireShortTernaryOperatorSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/RequireShortTernaryOperatorSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\RequireTernaryOperatorSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/RequireTernaryOperatorSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\RequireYodaComparisonSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/RequireYodaComparisonSniff.php',
        'SlevomatCodingStandard\\Sniffs\\ControlStructures\\UselessConditionWithReturnSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/ControlStructures/UselessConditionWithReturnSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Exceptions\\DeadCatchSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Exceptions/DeadCatchSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Exceptions\\ReferenceThrowableOnlySniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Exceptions/ReferenceThrowableOnlySniff.php',
        'SlevomatCodingStandard\\Sniffs\\Files\\FilepathNamespaceExtractor' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Files/FilepathNamespaceExtractor.php',
        'SlevomatCodingStandard\\Sniffs\\Files\\TypeNameMatchesFileNameSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Files/TypeNameMatchesFileNameSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Functions\\StaticClosureSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Functions/StaticClosureSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Functions\\UnusedInheritedVariablePassedToClosureSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Functions/UnusedInheritedVariablePassedToClosureSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Functions\\UnusedParameterSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Functions/UnusedParameterSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Functions\\UselessParameterDefaultValueSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Functions/UselessParameterDefaultValueSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\AbstractFullyQualifiedGlobalReference' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/AbstractFullyQualifiedGlobalReference.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\AlphabeticallySortedUsesSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/AlphabeticallySortedUsesSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\DisallowGroupUseSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/DisallowGroupUseSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\FullyQualifiedClassNameAfterKeywordSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/FullyQualifiedClassNameAfterKeywordSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\FullyQualifiedClassNameInAnnotationSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/FullyQualifiedClassNameInAnnotationSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\FullyQualifiedExceptionsSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/FullyQualifiedExceptionsSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\FullyQualifiedGlobalConstantsSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/FullyQualifiedGlobalConstantsSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\FullyQualifiedGlobalFunctionsSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/FullyQualifiedGlobalFunctionsSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\MultipleUsesPerLineSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/MultipleUsesPerLineSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\NamespaceDeclarationSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/NamespaceDeclarationSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\NamespaceSpacingSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/NamespaceSpacingSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\ReferenceUsedNamesOnlySniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/ReferenceUsedNamesOnlySniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\RequireOneNamespaceInFileSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/RequireOneNamespaceInFileSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\UndefinedKeywordTokenException' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/UndefinedKeywordTokenException.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\UnusedUsesSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/UnusedUsesSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\UseDoesNotStartWithBackslashSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/UseDoesNotStartWithBackslashSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\UseFromSameNamespaceSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/UseFromSameNamespaceSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\UseOnlyWhitelistedNamespacesSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/UseOnlyWhitelistedNamespacesSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\UseSpacingSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/UseSpacingSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Namespaces\\UselessAliasSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Namespaces/UselessAliasSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Operators\\DisallowIncrementAndDecrementOperatorsSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Operators/DisallowIncrementAndDecrementOperatorsSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Operators\\RequireCombinedAssignmentOperatorSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Operators/RequireCombinedAssignmentOperatorSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Operators\\RequireOnlyStandaloneIncrementAndDecrementOperatorsSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Operators/RequireOnlyStandaloneIncrementAndDecrementOperatorsSniff.php',
        'SlevomatCodingStandard\\Sniffs\\PHP\\OptimizedFunctionsWithoutUnpackingSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/PHP/OptimizedFunctionsWithoutUnpackingSniff.php',
        'SlevomatCodingStandard\\Sniffs\\PHP\\ShortListSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/PHP/ShortListSniff.php',
        'SlevomatCodingStandard\\Sniffs\\PHP\\TypeCastSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/PHP/TypeCastSniff.php',
        'SlevomatCodingStandard\\Sniffs\\PHP\\UselessParenthesesSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/PHP/UselessParenthesesSniff.php',
        'SlevomatCodingStandard\\Sniffs\\PHP\\UselessSemicolonSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/PHP/UselessSemicolonSniff.php',
        'SlevomatCodingStandard\\Sniffs\\TestCase' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/TestCase.php',
        'SlevomatCodingStandard\\Sniffs\\TypeHints\\DeclareStrictTypesSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/TypeHints/DeclareStrictTypesSniff.php',
        'SlevomatCodingStandard\\Sniffs\\TypeHints\\LongTypeHintsSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/TypeHints/LongTypeHintsSniff.php',
        'SlevomatCodingStandard\\Sniffs\\TypeHints\\NullTypeHintOnLastPositionSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/TypeHints/NullTypeHintOnLastPositionSniff.php',
        'SlevomatCodingStandard\\Sniffs\\TypeHints\\NullableTypeForNullDefaultValueSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/TypeHints/NullableTypeForNullDefaultValueSniff.php',
        'SlevomatCodingStandard\\Sniffs\\TypeHints\\ParameterTypeHintSpacingSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/TypeHints/ParameterTypeHintSpacingSniff.php',
        'SlevomatCodingStandard\\Sniffs\\TypeHints\\ReturnTypeHintSpacingSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/TypeHints/ReturnTypeHintSpacingSniff.php',
        'SlevomatCodingStandard\\Sniffs\\TypeHints\\TypeHintDeclarationSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/TypeHints/TypeHintDeclarationSniff.php',
        'SlevomatCodingStandard\\Sniffs\\TypeHints\\UselessConstantTypeHintSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/TypeHints/UselessConstantTypeHintSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Types\\EmptyLinesAroundTypeBracesSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Types/EmptyLinesAroundTypeBracesSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Variables\\DuplicateAssignmentToVariableSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Variables/DuplicateAssignmentToVariableSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Variables\\UnusedVariableSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Variables/UnusedVariableSniff.php',
        'SlevomatCodingStandard\\Sniffs\\Variables\\UselessVariableSniff' => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard/Sniffs/Variables/UselessVariableSniff.php',
        'Suin\\Sniffs\\Classes\\PSR4Sniff' => __DIR__ . '/..' . '/suin/phpcs-psr4-sniff/src/Suin/Sniffs/Classes/PSR4Sniff.php',
        'Suin\\Sniffs\\Classes\\PSR4\\AutoloadabilityInspector' => __DIR__ . '/..' . '/suin/phpcs-psr4-sniff/src/Suin/Sniffs/Classes/PSR4/AutoloadabilityInspector.php',
        'Suin\\Sniffs\\Classes\\PSR4\\AutoloadabilityInspectors' => __DIR__ . '/..' . '/suin/phpcs-psr4-sniff/src/Suin/Sniffs/Classes/PSR4/AutoloadabilityInspectors.php',
        'Suin\\Sniffs\\Classes\\PSR4\\AutoloadabilityInspectorsFactory' => __DIR__ . '/..' . '/suin/phpcs-psr4-sniff/src/Suin/Sniffs/Classes/PSR4/AutoloadabilityInspectorsFactory.php',
        'Suin\\Sniffs\\Classes\\PSR4\\AutoloadableClass' => __DIR__ . '/..' . '/suin/phpcs-psr4-sniff/src/Suin/Sniffs/Classes/PSR4/AutoloadableClass.php',
        'Suin\\Sniffs\\Classes\\PSR4\\ClassFileUnderInspection' => __DIR__ . '/..' . '/suin/phpcs-psr4-sniff/src/Suin/Sniffs/Classes/PSR4/ClassFileUnderInspection.php',
        'Suin\\Sniffs\\Classes\\PSR4\\InspectionResult' => __DIR__ . '/..' . '/suin/phpcs-psr4-sniff/src/Suin/Sniffs/Classes/PSR4/InspectionResult.php',
        'Suin\\Sniffs\\Classes\\PSR4\\NonAutoloadableClass' => __DIR__ . '/..' . '/suin/phpcs-psr4-sniff/src/Suin/Sniffs/Classes/PSR4/NonAutoloadableClass.php',
        'Suin\\Sniffs\\Classes\\PSR4\\PSR4UnrelatedClass' => __DIR__ . '/..' . '/suin/phpcs-psr4-sniff/src/Suin/Sniffs/Classes/PSR4/PSR4UnrelatedClass.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd306f134712eb131e993ebf50ccd95ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd306f134712eb131e993ebf50ccd95ba::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd306f134712eb131e993ebf50ccd95ba::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd306f134712eb131e993ebf50ccd95ba::$classMap;

        }, null, ClassLoader::class);
    }
}
