<?php

namespace GusApi;

final class ReportTypes
{
    public const REPORT_ACTIVITY_PHYSIC_PERSON = 'PublDaneRaportFizycznaOsoba';
    public const REPORT_ACTIVITY_PHYSIC_CEIDG = 'PublDaneRaportDzialalnoscFizycznejCeidg';
    public const REPORT_ACTIVITY_PHYSIC_AGRO = 'PublDaneRaportDzialalnoscFizycznejRolnicza';
    public const REPORT_ACTIVITY_PHYSIC_OTHER_PUBLIC = 'PublDaneRaportDzialalnoscFizycznejPozostala';
    public const REPORT_ACTIVITY_LOCAL_PHYSIC_WKR_PUBLIC = 'PublDaneRaportDzialalnoscFizycznejWKrupgn';
    public const REPORT_LOCALS_PHYSIC_PUBLIC = 'PublDaneRaportLokalneFizycznej';
    public const REPORT_LOCAL_PHYSIC_PUBLIC = 'PublDaneRaportLokalnaFizycznej';
    public const REPORT_ACTIVITY_PHYSIC_PUBLIC = 'PublDaneRaportDzialalnosciFizycznej';
    public const REPORT_ACTIVITY_LOCAL_PHYSIC_PUBLIC = 'PublDaneRaportDzialalnosciLokalnejFizycznej';
    public const REPORT_PUBLIC_LAW = 'PublDaneRaportPrawna';
    public const REPORT_ACTIVITY_LAW_PUBLIC = 'PublDaneRaportDzialalnosciPrawnej';
    public const REPORT_LOCALS_LAW_PUBLIC = 'PublDaneRaportLokalnePrawnej';
    public const REPORT_LOCAL_LAW_PUBLIC = 'PublDaneRaportLokalnaPrawnej';
    public const REPORT_ACTIVITY_LOCAL_LAW_PUBLIC = 'PublDaneRaportDzialalnosciLokalnejPrawnej';
    public const REPORT_COMMON_LAW_PUBLIC = 'PublDaneRaportWspolnicyPrawnej';
    public const REPORT_UNIT_TYPE_PUBLIC = 'PublDaneRaportTypJednostki';

    public const REPORTS = [
        self::REPORT_ACTIVITY_PHYSIC_PERSON,
        self::REPORT_ACTIVITY_PHYSIC_CEIDG,
        self::REPORT_ACTIVITY_PHYSIC_AGRO,
        self::REPORT_ACTIVITY_PHYSIC_OTHER_PUBLIC,
        self::REPORT_ACTIVITY_LOCAL_PHYSIC_WKR_PUBLIC,
        self::REPORT_LOCALS_PHYSIC_PUBLIC,
        self::REPORT_LOCAL_PHYSIC_PUBLIC,
        self::REPORT_ACTIVITY_PHYSIC_PUBLIC,
        self::REPORT_ACTIVITY_LOCAL_PHYSIC_PUBLIC,
        self::REPORT_PUBLIC_LAW,
        self::REPORT_ACTIVITY_LAW_PUBLIC,
        self::REPORT_LOCALS_LAW_PUBLIC,
        self::REPORT_LOCAL_LAW_PUBLIC,
        self::REPORT_ACTIVITY_LOCAL_LAW_PUBLIC,
        self::REPORT_COMMON_LAW_PUBLIC,
        self::REPORT_UNIT_TYPE_PUBLIC,
    ];
}
