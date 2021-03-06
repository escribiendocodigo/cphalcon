
extern zend_class_entry *phalcon_di_abstractinjectionaware_ce;

ZEPHIR_INIT_CLASS(Phalcon_Di_AbstractInjectionAware);

PHP_METHOD(Phalcon_Di_AbstractInjectionAware, getDI);
PHP_METHOD(Phalcon_Di_AbstractInjectionAware, setDI);

#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_OBJ_INFO_EX(arginfo_phalcon_di_abstractinjectionaware_getdi, 0, 0, Phalcon\\Di\\DiInterface, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_di_abstractinjectionaware_getdi, 0, 0, IS_OBJECT, "Phalcon\\Di\\DiInterface", 0)
#endif
ZEND_END_ARG_INFO()

#if PHP_VERSION_ID >= 70100
#if PHP_VERSION_ID >= 70200
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_di_abstractinjectionaware_setdi, 0, 1, IS_VOID, 0)
#else
ZEND_BEGIN_ARG_WITH_RETURN_TYPE_INFO_EX(arginfo_phalcon_di_abstractinjectionaware_setdi, 0, 1, IS_VOID, NULL, 0)
#endif
#else
ZEND_BEGIN_ARG_INFO_EX(arginfo_phalcon_di_abstractinjectionaware_setdi, 0, 0, 1)
#define arginfo_phalcon_di_abstractinjectionaware_setdi NULL
#endif

	ZEND_ARG_OBJ_INFO(0, container, Phalcon\\Di\\DiInterface, 0)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(phalcon_di_abstractinjectionaware_method_entry) {
	PHP_ME(Phalcon_Di_AbstractInjectionAware, getDI, arginfo_phalcon_di_abstractinjectionaware_getdi, ZEND_ACC_PUBLIC)
	PHP_ME(Phalcon_Di_AbstractInjectionAware, setDI, arginfo_phalcon_di_abstractinjectionaware_setdi, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
